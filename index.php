<?php get_header(); //header.phpを取得 ?>

    <main>
        <!-- トップ画像 -->
        <div class="top">
            <div class="top-title">No Coding No Life</div>
        </div>

        <!-- コース一覧 -->
        <section class="course">
            <div class="inner">
                <h2 class="cmn-title">コース一覧</h2>
                <div class="course-cont">
                    <ul class="course-list">
                        <li class="course-item">
                            <div class="course-item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>./image/cource-figure01.png" alt=""></div>
                            <div class="course-item-text">
                                <p>WordPressの基礎を理解し、2つ のテーマ開発を目指します。実務 に近い形で学習します。</p>
                                    <div class="course-item-box">
                                        <p>申込締切</p>
                                        <p>2021年12月31日26時</p>
                                    </div>
                            </div>
                        </li>
                        <li class="course-item">
                            <div class="course-item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>./image/cource-figure02.png" alt=""></div>
                            <div class="course-item-text">
                                    <p>Shopifyを用いて3つのECサイト を構築することを通してと応用を 学んでいきます。</p>
                                    <div class="course-item-box">
                                        <p>申込締切</p>
                                        <p>2021年12月31日26時</p>
                                    </div>
                            </div>
                        </li>
                        <li class="course-item">
                            <div class="course-item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>./image/course-figure03.png" alt=""></div>
                            <div class="course-item-text">
                                    <p>RubyとRuby on Railsを3つの アプリケーションを開発すること を通して学びます。</p>
                                    <div class="course-item-box">
                                        <p>申込締切</p>
                                        <p>2021年12月31日26時</p>
                                    </div>
                            </div>
                        </li>
                        <li class="course-item">
                            <div class="course-item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>./image/cource-figure04.png" alt=""></div>
                            <div class="course-item-text">
                                    <p>Pythonの基礎を学習した後、3 つの機械学習プログラムを作成す ることを目指します。</p>
                                    <div class="course-item-box">
                                        <p>申込締切</p>
                                        <p>2021年12月31日26時</p>
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="course-btn">
                    <a href="#">もっと見る</a>
                </div>
            </div>
        </section>

    <!-- 講師紹介-->
        <section class="teacher">
            <div class="inner">
                <h2 class="cmn-title">講師紹介</h2>
                <div class="teacher-cont">
                    <ul class="teacher-list">
                        <li class="teacher-item">
                            <div class="teacher-item-image"><img src="./image/teacher-profile01.png" alt=""></div>
                            <div class="teacher-item-text">
                                <div class="teacher-item-title">水谷メアリージュン</div>
                                <p>システムエンジニア歴約20年、プログラミング歴約35年。プログラミング の守備範囲は、 フロントエンド、サーバサイド、Android開発と広く、普段 はシステム開発プロジェクト の管理や後輩の指導を行っています。</p>
                            </div>
                        </li>
                        <li class="teacher-item">
                            <div class="teacher-item-image"><img src="./image/teacher-profile02.png" alt=""></div>
                            <div class="teacher-item-text">
                                <div class="teacher-item-title">ジョージ・ウィリアム</div>
                                <p>IoT技術をベースに、ハードウェアからクラウドまでを広くカバーする他、 小学生から大人 まで幅広く、プログラミングに関する指導経験が多数あります。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 資料請求 -->
        <section class="contact">
            <div class="inner">
                <h2 class="contact-title">動き出すなら今だ</h2>
            </div>
            <div class="contact-text">
                <p>「自由な場所で働きたい」<br> 「自由な時間に働きたい」<br> 「個人で稼げる力を身に付けたい」</p>
                <p>プログラミングはこれら全てを叶えてくれる。<br> 人生を変える力を持っている。 <br>さあ、今日を人生のターニングポイントにしよう。</p>
            </div>
            <div class="contact-btn"><a href="#">資料請求する</a></div>
        </section>
    </main>

<?php get_footer(); //footer.phpを取得 PHPで終了するので閉じタグは不要
// PHPファイルは、最後の行がPHPの記述で終わる場合は、終了タグを書かないことが推奨されている。