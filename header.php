<!-- 一般的にheader.phpに記述する内容は、「head要素+デザイン上のヘッダー部分」 -->
<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
    <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入 ?>
</head>

<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
    <!-- ヘッダー -->
    <header class="header">
        <img class="header-logo" src="<?php echo get_template_directory_uri(); //使用中のテーマURLに置き換わるb?>/image/logo.png" alt="コーディングスクールのロゴ">
        <div class="header-nav">
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="<?php echo home_url( '/contact/' ); //サイトのトップページのURLに置き換わる(home_url()は、第一引数にパスを受け付けている) ?>">お問い合わせ</a></li>
                    <li class="nav-item"><a href="#">ログアウト</a></li>
                </ul>
            </nav>
        </div>
    </header>