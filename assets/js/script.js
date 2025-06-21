// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // モバイルメニューの項目をクリックしたらメニューを閉じる
        const mobileMenuItems = mobileMenu.querySelectorAll('a');
        mobileMenuItems.forEach(item => {
            item.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    }
});

// Tab navigation functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // タブボタンのアクティブ状態を切り替え
            tabButtons.forEach(btn => {
                btn.classList.remove('text-primary', 'border-primary', 'font-medium');
                btn.classList.add('text-gray-500');
            });
            this.classList.add('text-primary', 'border-b-2', 'border-primary', 'font-medium');
            this.classList.remove('text-gray-500');
            
            // タブコンテンツの表示を切り替え
            tabContents.forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('active');
            });
            const targetTab = document.getElementById(tabId);
            if (targetTab) {
                targetTab.classList.remove('hidden');
                targetTab.classList.add('active');
            }
        });
    });
});

// Form validation functionality
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // 簡易的なバリデーション
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const inquiryType = document.getElementById('inquiry_type').value;
            const privacy = document.getElementById('privacy').checked;
            
            let isValid = true;
            let errorMessage = '';
            
            if (!name) {
                isValid = false;
                errorMessage += 'お名前を入力してください。\n';
            }
            
            if (!email) {
                isValid = false;
                errorMessage += 'メールアドレスを入力してください。\n';
            } else if (!isValidEmail(email)) {
                isValid = false;
                errorMessage += '有効なメールアドレスを入力してください。\n';
            }
            
            if (!inquiryType) {
                isValid = false;
                errorMessage += 'お問い合わせ内容を選択してください。\n';
            }
            
            if (!privacy) {
                isValid = false;
                errorMessage += 'プライバシーポリシーに同意してください。\n';
            }
            
            if (isValid) {
                // フォームをサーバーに送信
                form.method = 'POST';
                form.action = 'contact-handler.php';
                form.submit();
            } else {
                alert(errorMessage);
            }
        });
    }
    
    // メールアドレスの簡易バリデーション
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});

// Smooth scroll functionality
document.addEventListener('DOMContentLoaded', function() {
    // スムーススクロール
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // ヘッダーの高さ分を調整
                    behavior: 'smooth'
                });
            }
        });
    });
}); 