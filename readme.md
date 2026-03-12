## 自分のプロジェクトにクローン

```
git clone https://github.com/user/example-repo.git [my-project]
```

### リモートリポジトリの変更

```
git remote remove origin
```

### 新しく作成したリポジトリと繋ぐ(push an existing repository from the command line)

```
git remote add origin [your-repo-url]
git branch -M main
git push -u origin main
```

## ローカル環境の立ち上げ（Dockerインストール済み）

<!-- Dockerコンテナの起動 -->

docker-compose up -d

<!-- Dockerコンテナの停止 -->

docker-compose down

## プロンプト

添付したデザインを下記の注意事項を守ってレスポンシブで忠実にコーディングしてください。

ルール１：ワードプレスはphpを使用するが基本、htmlで画像ソースやリンクのみphp使用、cssはscssでクラス名はフロックスを採用してください。
ルール２：下記のカラー・フォントは変数としてscssファイル上部に宣言し、使用してください。
ルール３：こちらの変数を使ってください

// ==========================================================================
// Variables
// ==========================================================================
$font-base: "Noto Sans JP", sans-serif;
$font-en: "Open Sans", sans-serif;

$color-main: #1d88f3;
$color-main2: #0e6ed0;
$color-sub: #004e87;
$color-base: #ebf0f8;

$color-orange: #ff9600;
$color-text: #333;
$color-text-light: #d6e2ee;
$color-bg-gray: #f5f7f9;
$color-border: #eaeaea;

// Breakpoints
$breakpoint-lg: 1280px;
$breakpoint-md: 1080px;
$breakpoint-sm: 768px;
$breakpoint-xs: 480px;

// Mixins
@mixin mq($breakpoint: sm) {
  @if $breakpoint == lg {
    @media (max-width: $breakpoint-lg) {
      @content;
    }
  } @else if $breakpoint == md {
    @media (max-width: $breakpoint-md) {
      @content;
    }
  } @else if $breakpoint == sm {
    @media (max-width: $breakpoint-sm) {
      @content;
    }
  } @else if $breakpoint == xs {
    @media (max-width: $breakpoint-xs) {
      @content;
    }
  }
}
@mixin mq-up($breakpoint: sm) {
@if $breakpoint == lg {
    @media (min-width: #{$breakpoint-lg + 1px}) {
@content;
}
} @else if $breakpoint == md {
    @media (min-width: #{$breakpoint-md + 1px}) {
@content;
}
} @else if $breakpoint == sm {
    @media (min-width: #{$breakpoint-sm + 1px}) {
@content;
}
} @else if $breakpoint == xs {
    @media (min-width: #{$breakpoint-xs + 1px}) {
@content;
}
}
}

前提事項
・リセットcssすでにあり
・htmlはすでにある
・画像はすでにある
・コーディングはscssで行う
・クラス名はフロックスを採用する
・レスポンシブ対応
・JSはjQueryで実装
・scssは&とかは使わずに入れ子だけで、クラス名の検索が困難になるため
・例：p-top-featuresに関連するコードはp-top-featuresの中に全てラップして
