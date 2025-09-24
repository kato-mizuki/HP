<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    // TOPページ（フォーム付き）
    public function top()
    {
        return view('top');
    }

    // 確認画面
    public function confirm(Request $request)
    {
        $data = $request->all();
        // サーバーサイドバリデーション
        // バリデーション
        $validated = $request->validate([
            'inquiry'       => 'required|array|min:1',
            'comment'       => 'required|string|max:500',
            'name'          => 'required|string|max:50',
            'furigana'      => 'required|string|max:50',
            'email'         => 'required|email',
            'tel'           => 'nullable|regex:/^\d{10,11}$/',
            'postcode'      => 'required|regex:/^\d{3}-?\d{4}$/',
            'pref'          => 'required|string',
            'address'       => 'required|string|max:100',
            'building'      => 'nullable|string',
            'programming'   => 'required',
        ]);

        // 入力内容をセッションに保存
        $request->session()->put('form', $validated);

        // 確認画面へ
        return view('contact.confirm', ['data' => $validated]);
    }

    public function send(Request $request)
    {
        $formData = $request->session()->get('form');

        if (!$formData) {
            return redirect()->route('top');
        }

        try {
            Mail::to('@gmail.com') // 管理者宛
                ->send(new ContactMail($formData));

            $request->session()->forget('form');

            return view('contact.thanks', ['mailSent' => true]);
        } catch (\Exception $e) {
            // 管理用ログに残す（文字コードをUTF-8に変換）
            $message = mb_convert_encoding('メール送信失敗: ' . $e->getMessage(), 'UTF-8', 'SJIS-win,UTF-8,ISO-8859-1');

            Log::error($message, [
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            return view('contact.thanks', [
                'mailSent' => false,
            ]);
        }
    }
    // public function edit(Request $request)
    // {
    //     // セッションに入力内容を戻す
    //     $request->session()->put('form', $request->all());

    //     // TOPページに表示（$dataで値を埋める）
    //     return redirect()->route('top')->withInput($request->all());
    // }

    public function edit(Request $request)
    {
        // セッションに保存している form データを old() に流す
        return redirect()->to(route('top') . '#jump5')->withInput($request->session()->get('form'));
    }
}