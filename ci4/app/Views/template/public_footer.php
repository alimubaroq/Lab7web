</main>
        <footer>
            <p>&copy; <?= date('Y'); ?> Luxarc Web</p>
        </footer>
    </div> <!-- .container -->
    <script>
        // Prevent conflicts with browser extensions
        (function() {
            'use strict';

            // Like button functionality
            const likeBtn = document.querySelector('.like-btn');
            if (likeBtn) {
                likeBtn.addEventListener('click', function() {
                    this.classList.toggle('liked');
                    const icon = this.querySelector('i');
                    const text = this.querySelector('span');

                    if (this.classList.contains('liked')) {
                        if (icon) icon.className = 'fas fa-heart';
                        if (text) text.textContent = 'Liked';
                        this.style.borderColor = '#d4af37';
                        this.style.color = '#d4af37';
                    } else {
                        if (icon) icon.className = 'far fa-heart';
                        if (text) text.textContent = 'Like';
                        this.style.borderColor = '#b8a082';
                        this.style.color = '#6b4423';
                    }
                });
            }

            // Share functions
            window.shareToFacebook = function() {
                try {
                    const url = encodeURIComponent(window.location.href);
                    const titleElement = document.querySelector('.article-title');
                    const title = titleElement ? encodeURIComponent(titleElement.textContent) : 'Artikel Luxarc';
                    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank', 'width=600,height=400');
                } catch (error) {
                    console.warn('Share to Facebook failed:', error);
                }
            };

            window.shareToTwitter = function() {
                try {
                    const url = encodeURIComponent(window.location.href);
                    const titleElement = document.querySelector('.article-title');
                    const title = titleElement ? encodeURIComponent(titleElement.textContent) : 'Artikel Luxarc';
                    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
                } catch (error) {
                    console.warn('Share to Twitter failed:', error);
                }
            };

            window.shareToWhatsApp = function() {
                try {
                    const url = encodeURIComponent(window.location.href);
                    const titleElement = document.querySelector('.article-title');
                    const title = titleElement ? encodeURIComponent(titleElement.textContent) : 'Artikel Luxarc';
                    window.open(`https://wa.me/?text=${title} ${url}`, '_blank');
                } catch (error) {
                    console.warn('Share to WhatsApp failed:', error);
                }
            };

            window.shareToTelegram = function() {
                try {
                    const url = encodeURIComponent(window.location.href);
                    const titleElement = document.querySelector('.article-title');
                    const title = titleElement ? encodeURIComponent(titleElement.textContent) : 'Artikel Luxarc';
                    window.open(`https://t.me/share/url?url=${url}&text=${title}`, '_blank');
                } catch (error) {
                    console.warn('Share to Telegram failed:', error);
                }
            };

            // Scroll to top
            window.scrollToTop = function() {
                try {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } catch (error) {
                    window.scrollTo(0, 0);
                }
            };

            // Share button functionality
            const shareBtn = document.querySelector('.share-btn');
            if (shareBtn) {
                shareBtn.addEventListener('click', function() {
                    try {
                        const titleElement = document.querySelector('.article-title');
                        const title = titleElement ? titleElement.textContent : 'Artikel Luxarc';
                        const url = window.location.href;

                        if (navigator.share) {
                            navigator.share({
                                title: title,
                                url: url
                            }).catch(err => console.warn('Share failed:', err));
                        } else if (navigator.clipboard) {
                            navigator.clipboard.writeText(url).then(() => {
                                alert('Link artikel telah disalin ke clipboard!');
                            }).catch(() => {
                                // Fallback for older browsers
                                const textArea = document.createElement('textarea');
                                textArea.value = url;
                                document.body.appendChild(textArea);
                                textArea.select();
                                document.execCommand('copy');
                                document.body.removeChild(textArea);
                                alert('Link artikel telah disalin ke clipboard!');
                            });
                        }
                    } catch (error) {
                        console.warn('Share functionality failed:', error);
                    }
                });
            }

            // Bookmark functionality
            const bookmarkBtn = document.querySelector('.bookmark-btn');
            if (bookmarkBtn) {
                bookmarkBtn.addEventListener('click', function() {
                    this.classList.toggle('bookmarked');
                    const icon = this.querySelector('i');
                    const text = this.querySelector('span');

                    if (this.classList.contains('bookmarked')) {
                        if (icon) icon.className = 'fas fa-bookmark';
                        if (text) text.textContent = 'Saved';
                        this.style.borderColor = '#d4af37';
                        this.style.color = '#d4af37';
                    } else {
                        if (icon) icon.className = 'far fa-bookmark';
                        if (text) text.textContent = 'Save';
                        this.style.borderColor = '#b8a082';
                        this.style.color = '#6b4423';
                    }
                });
            }
        })();
    </script>
</body>
</html>
