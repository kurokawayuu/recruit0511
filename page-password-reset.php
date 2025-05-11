<?php
/**
 * パスワード再設定ページのテンプレート
 * Template Name: パスワード再設定ページ
 */
get_header();
?>

<main class="password-reset-page">
    <div class="content">
        <div class="auth-container">
            <div class="auth-header">
                <h1 class="auth-title">パスワード再設定</h1>
                <p class="auth-description">パスワードをお忘れの方は、メールアドレスを入力して再設定手続きを行ってください。</p>
            </div>
            
            <div class="auth-form">
                <?php 
                // WP-Membersのパスワードリセットフォームを表示
                echo do_shortcode('[wpmem_form pwd_reset]'); 
                ?>
            </div>
            
            <div class="auth-footer">
                <p><a href="<?php echo esc_url(home_url('/login/')); ?>" class="login-link">ログインページに戻る</a></p>
                <p>アカウントをお持ちでない方は<a href="<?php echo esc_url(home_url('/register/')); ?>" class="register-link">こちらで新規登録</a></p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>