<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
        // サーバーサイドバリデーション
        // バリデーション
        $validated = $request->validate([
            'comment'       => 'required|string|max:500',
            'name'          => 'required|string|max:50',
            'furigana'      => 'required|string|max:50',
            'email'         => 'required|email',
            'tel'           => 'nullable|regex:/^\d{10,11}$/',
            'postcode'      => 'nullable|regex:/^\d{3}-?\d{4}$/',
            'address'       => 'nullable|string|max:100',
            'inquiry'       => 'required|array|min:1',
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
            Mail::to('mk1141629@gmail.com') // 管理者宛
                ->send(new ContactMail($formData));

            $request->session()->forget('form');

            return view('contact.thanks', ['mailSent' => true]);
        } catch (\Exception $e) {
            return view('contact.thanks', [
                'mailSent' => false,
                'errorMessage' => $e->getMessage()
            ]);
        }
    }
    public function edit(Request $request)
    {
        // セッションに入力内容を戻す
        $request->session()->put('form', $request->all());

        // TOPページに表示（$dataで値を埋める）
        return redirect()->route('top')->withInput($request->all());
    }
}