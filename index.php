<?php get_header(); ?>

  <section class="mv section">
    <div class="mv-wave">
      <div class="mv-txt line-1" id="typing">
        <span class="m-span">W</span>
        <span class="m-span">e</span>
        <span class="m-span">l</span>
        <span class="m-span">c</span>
        <span class="m-span">o</span>
        <span class="m-span">m</span>
        <span class="m-span">e</span>
        <span class="m-span">&nbsp;</span>
        <span class="m-span">t</span>
        <span class="m-span">o</span>
        <span class="m-span">&nbsp;</span>
        <span class="m-span">m</span>
        <span class="m-span">y</span>
        <span class="m-span">&nbsp;</span>
        <span class="m-span">p</span>
        <span class="m-span">a</span>
        <span class="m-span">g</span>
        <span class="m-span">e</span>
      </div>
    </div>
    <div class="mv-content">
      <div class="circle-line">
        <div class="circle c01"></div>
        <div class="circle c02"></div>
        <div class="circle c03"></div>
        <div class="circle c04"></div>
        <div class="circle c05"></div>
        <div class="circle c06"></div>
        <div class="circle c07"></div>
      </div>

        <div class="loading">
          <span data-text="M">M</span>
          <span data-text="I">I</span>
          <span data-text="H">H</span>
          <span data-text="O">O</span>
          <span>&nbsp;</span>
          <span data-text="U">U</span>
          <span data-text="C">C</span>
          <span data-text="H">H</span>
          <span data-text="I">I</span>
          <span data-text="D">D</span>
          <span data-text="A">A</span>
        </div>

        <p class="site__txt">
          <span>～</span>
          <span>あ</span>
          <span>な</span>
          <span>た</span>
          <span>の</span>
          <span>想</span>
          <span>い</span>
          <span>を</span>
          <span>形</span>
          <span>に</span>
          <span>～</span>
        </p>

        <a class="scroll" href="#">
          <span></span>
        </a>
    </div>
  </section>

  <section class="service" id="service">
    <div class="inner">

      <h2 class="section__ttl fadeIn_item offs">SERVICE</h2>
      <h3 class="service__ttl fadeIn_item offs" id="t01">01</h3>

      <div class="service__content fadeIn_item offs" id="c01">
        <div class="service__item">
          <p class="service__item-ttl">デザイン</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/design.png" class="service__item-img" alt="デザインの画像です">
        </div>
        <div class="service__info" id="i01">
          <p class="service__info-txt">お客様のご要望に沿ったデザインを制作いたします。<br>ユーザーにとって見やすく、使いやすく、そして愛されるデザインを目指します。</p>
          <p class="service__info-ttl">ツール</p>
          <p class="service__info-tool">Adobe XD</p>
        </div>
      </div>

      <h3 class="service__ttl fadeIn_item offs" id="t02">02</h3>

      <div class="service__content fadeIn_item offs" id="c02">
        <div class="service__item">
          <p class="service__item-ttl">コーディング</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/programming.png" class="service__item-img" id="s-img02" alt="プログラミングの画像です">
        </div>
        <div class="service__info" id="i02">
          <p class="service__info-txt">デザインを活かす動きや効果を実装し、Only Oneのサイトを制作します。<br>デザインの意図に沿った動きや効果を付け、ユーザーに深くまで理解していただけるサイトを目指します。</p>
          <p class="service__info-ttl">ツール</p>
          <p class="service__info-tool">HTML / CSS / SCSS / JS(jQuery) / Wordpress</p>
        </div>
      </div>

      <h3 class="service__ttl fadeIn_item offs" id="t03">03</h3>

      <div class="service__content fadeIn_item offs" id="c03">
        <div class="service__item">
          <p class="service__item-ttl">その他</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/setting.png" class="service__item-img" id="s-img03" alt="設定の画像です">
        </div>
        <div class="service__info" id="i03">
          <p class="service__info-txt">プログラムのバージョン違いやサーバ設定、ブラウザの種類などが原因で不具合が生じることがあります。<br> <br>Webページの修正や新機能実装、スマートフォン対応など、ご要望に応じて対応いたします。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="skill" id="skill">
    <div class="inner">
      <h2 class="section__ttl fadeIn_item offs">SKILL</h2>

      <div class="skill__content">

        <div class="balloon">
          <div class="skill__item s-c01">
            <h3 class="skill__ttl">HTML</h3>
            <i class="fab fa-html5"></i>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
        </div>

        <div class="balloon">
          <div class="skill__item s-c02">
            <h3 class="skill__ttl">CSS</h3>
            <i class="fab fa-css3-alt"></i>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
        </div>

        <div class="balloon">
          <div class="skill__item s-c03">
            <h3 class="skill__ttl m_ttl">JavaScript</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/javascript.png" class="skill-img java" alt="JavaScript"/>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
        </div>

          <div class="balloon">
            <div class="skill__item s-c04">
              <img src="<?php echo get_template_directory_uri(); ?>/img/jQuery .png" class="skill-img jq" alt="jQuery">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
          </div>

          <div class="balloon">
            <div class="skill__item s-c05">
              <i class="fab fa-wordpress"></i>
              <h3 class="skill__ttl w_ttl">WordPress</h3>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
          </div>

          <div class="balloon">
            <div class="skill__item s-c06">
              <i class="fab fa-sass"></i>
              <h3 class="skill__ttl w_ttl">Sass</h3>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
          </div>

          <div class="balloon">
            <div class="skill__item s-c07">
              <img src="<?php echo get_template_directory_uri();?>/img/media-queries.png" class="media-queries media" alt="レスポンシブの画像です"/>
              <h3 class="skill__ttl m_ttl">Media<br>Queries</h3>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/wave.png" class="wave" alt="波線です">
          </div>
      </div>
    </div>
  </section>

  <section class="works" id="works">
    <h2 class="section__ttl fadeIn_item offs">WORKS</h2>
    <div class="inner">

      <div class="works__content fadeIn_item offs">
        <div class="works__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mosya.png" class="works__img" alt="模写の写真です">
        </div>
        <div class="works__info">
          <p class="works__info-ttl">模写サイト</p>
          <p class="works__info-copy">プログラミングを始めて初めて模写をしたサイトです。レスポンシブにも挑戦しましたが、とても難しく感じました。</p>
          <p class="works__info-txt">制作期間：約１週間</p>
          <p class="works__info-tool">ツール：HTML / CSS / レスポンシブ</p>
        </div>
      </div>
      <a href="https://miho1027.github.io/mosya/" class="works__btn fadeIn_item offs" id="wb"><i class="fa fa-chevron-right"></i>Read More</a>

      <div class="works__content fadeIn_item offs" id="works-c02">
        <div class="works__info02">
          <p class="works__info-ttl">タブメニュー</p>
          <p class="works__info-copy">JavaScriptで機能を実装することが難しかったです。世界各国の都市名がホバーした時にでるように工夫しました。</p>
          <p class="works__info-txt">制作期間：約１週間</p>
          <p class="works__info-tool">ツール：HTML / CSS / JavaScript / jQuery</p>
        </div>
        <div class="works__item02">
          <img src="<?php echo get_template_directory_uri(); ?>/img/tab.png" class="works__img" alt="タブの写真です">
        </div>
      </div>
      <a href="https://miho1027.github.io/tab/" class="works__btn fadeIn_item offs"><i class="fa fa-chevron-right"></i>Read More</a>

      <div class="works__content fadeIn_item offs">
        <div class="works__item" id="item1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio.png" class="works__img" id="work01"alt="ポートフォリオの写真です">
        </div>
        <div class="works__info">
          <p class="works__info-ttl">ポートフォリオ</p>
          <p class="works__info-copy">これまで授業で学習してきたことを活かしたサイトです。</p>
          <p class="works__info-txt">制作期間：約1か月</p>
          <p class="works__info-tool">ツール：HTML / CSS / Sass / JavaScript / jQuery / レスポンシブ / WordPress</p>
        </div>
      </div>
      <a href="https://miho1027.github.io/portfolio/" class="works__btn fadeIn_item offs" id="wb"><i class="fa fa-chevron-right"></i>Read More</a>
      
      <div class="works__content fadeIn_item offs" id="works-c02">
        <div class="works__info02">
          <p class="works__info-ttl">株式会社ココステートのwebサイト</p>
          <p class="works__info-copy">株式会社ココステートのサイトをリニューアルしました。デザインからコーディングまで共同開発しました。</p>
          <p class="works__info-txt">制作期間：約1ヶ月</p>
          <p class="works__info-tool">ツール：HTML / CSS / JavaScript / jQuery / Git / Adobe XD</p>
        </div>
        <div class="works__item02">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cocostate.png" class="works__img" alt="株式会社ココステートのwebサイトです。">
        </div>
      </div>
      <a href="https://cocostate.jp/index.html" class="works__btn fadeIn_item offs"><i class="fa fa-chevron-right"></i>Read More</a>
      
    </div>
  </section>

  <section class="about" id="about">
    <h2 class="section__ttl fadeIn_item offs">ABOUT</h2>
    <div class="inner">
      <div class="about__content fadeIn_item offs">
        <div class="about__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/selfie.jpg" class="about__item-img" alt="プロフィール写真">
        </div>
        <div class="about__info">
          <p class="about__info-ttl">Miho Uchida</p>
          <ul class="about__list">
            <li class="about__list-item" id ="li01"><span>▲</span>神戸市在住</li>
            <li class="about__list-item" id ="li02"><span>▲</span>2021年1月からWebサイト制作を開始</li>
            <p class="about__list-txt">プログラミング実務未経験＋プログラミング知識0から学習を始めました。</p>
            <li class="about__list-item" id ="li03"><span>▲</span>2021年4月にWebサイト制作の初案件を受注</li>
            <li class="about__list-item" id ="li04"><span>▲</span>座右の銘は「Stay hungry, stay foolish」です。</li>
          </ul>
        </div>
      </div>
      <div class="about__copy fadeIn_item offs">
        <p class="about__copy-ttl">Concept of this Website</p>
        <p class="about__copy-txt">
          このポートフォリオサイトのコンセプトは、<span>「空と虹」</span>です。<span>「空」</span>は、私たちの自由で無限の可能性が広がる将来を、<span>「虹」</span>は、1人1人異なる色・個性があり、互いに尊重することで綺麗なアーチを描けることを表現したかったため、この２つの言葉を選択しました。
          今後のWebサイト制作においても、お客様に寄り添い、皆様の<span>「色や想いを形にする」</span>お手伝いをさせていただきたいです。
        </p>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="section__ttl fadeIn_item offs">CONTACT</h2>
    <div class="inner">
    <?php echo do_shortcode( '[contact-form-7 id="7" title="CONTACT"]' ); ?>
      <!-- <form action="" class="contact__form fadeIn_item offs">
        <ul class="contact__list">
          <li class="contact__list-item">
            <i class="fa fa-user form-icon"></i>Name<span>（お名前）</span>:<br>
            <input type="text" placeholder="山田　太郎" class="input__name"/>
          </li>
          <li class="contact__list-item">
            <i class="fa fa-at form-icon"></i>Mail<span>（メールアドレス）</span>:<br>
            <input type="text" placeholder="abcde@example.com" class="input__email"/>
          </li>
          <li class="contact__list-item">
            <i class="fa fa-phone form-icon"></i>Phone<span>（電話番号）</span>:<br>
            <input type="text" placeholder="000-0000-0000" class="input__phone" />
          </li>
          <li class="contact__list-item">
            <i class="fa fa-envelope form-icon"></i>Message<span>（お問い合わせ内容）</span>:<br>
            <textarea placeholder="Message" rows="10" class="textarea__message"></textarea>
          </li>
        </ul>
        <div class="contact__btn">
          <input type ="submit" class="btn-submit" value="Send" />
        </div>
      </form> -->
    </div>
  </section>

<?php get_footer(); ?>