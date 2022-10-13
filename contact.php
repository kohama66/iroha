<?php 
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
  <section class="contact">
    <div class="contact__inner">
      <div class="contact__inner__main_content">
        <h2>IROHAKAGUへのお問い合わせ</h2>
        <p>
          以下のフォームをご入力いただき、「送信」ボタンを押してください。<br />
          後日、担当者よりご連絡させて頂きます。
        </p>
        
        <?php echo do_shortcode('[contact-form-7 id="86" title="お問合せ"]'); ?>

      </div>
    </div>
  </section>
<?php get_footer(); ?>
