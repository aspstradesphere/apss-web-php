<?php
// Scan for videos in the folder
// Scan for videos in the folder
// $product_slug should be set by the including page. If not, default to root or nothing.
$subdir = isset($product_slug) && !empty($product_slug) ? $product_slug . '/' : '';
$video_dir = 'assets/videos/' . $subdir;
$abs_video_dir = __DIR__ . '/../assets/videos/' . $subdir;
$videos = [];

if (is_dir($abs_video_dir)) {
    $files = scandir($abs_video_dir);
    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['mp4', 'webm', 'ogg'])) {
            $videos[] = [
                'src' => base_url($video_dir . $file),
                'title' => ucwords(str_replace(['-', '_', '.' . $ext], ' ', $file))
            ];
        }
    }
}

// Add sample videos if none exist (for demonstration)
if (empty($videos)) {
    // These are placeholders. In a real scenario, we might want to hide the section or show a message.
    // For now, we will set a flag to show upload instructions or default placeholders if user wants.
}
?>

<!-- Video Gallery Section -->
<section class="section section-black" id="video-gallery">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title text-white">Product Highlights & Process</h2>
            <p class="section-description text-white">Watch our quality processing and detailed product showcases.</p>
        </div>

        <?php if (!empty($videos)): ?>
            <div class="video-slider-container">
                <div class="video-slider-track">
                    <?php foreach ($videos as $video): ?>
                        <div class="video-slide">
                            <div class="video-card">
                                <video controls preload="metadata" width="100%">
                                    <source src="<?php echo $video['src']; ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h3 class="video-title">
                                    <?php echo $video['title']; ?>
                                </h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation -->
                <?php if (count($videos) > 1): ?>
                    <button class="video-nav prev" aria-label="Previous Video">‹</button>
                    <button class="video-nav next" aria-label="Next Video">›</button>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <!-- Placeholder for testing visual layout when no videos exist -->
            <div class="video-slider-container">
                <div class="video-slider-track">
                    <div class="video-slide">
                        <div class="video-card">
                            <div class="placeholder-video">
                                <p style="color: #666; font-size: 14px;">No Video Loaded</p>
                            </div>
                            <h3 class="video-title">Processing Overview (Sample)</h3>
                        </div>
                    </div>
                    <div class="video-slide">
                        <div class="video-card">
                            <div class="placeholder-video">
                                <p style="color: #666; font-size: 14px;">Upload MP4 to <?php echo $video_dir; ?></p>
                            </div>
                            <h3 class="video-title">Quality Check (Sample)</h3>
                        </div>
                    </div>
                </div>
                <button class="video-nav prev" aria-label="Previous Video">‹</button>
                <button class="video-nav next" aria-label="Next Video">›</button>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <p style="color: #888; font-size: 14px;">(Videos will appear here automatically when added to
                    <code><?php echo $video_dir; ?></code>)
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
    /* Video Slider Styles */
    .video-slider-container {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
        overflow: hidden;
        padding: 0 50px;
        /* Space for arrows */
    }

    .video-slider-track {
        display: flex;
        gap: 30px;
        transition: transform 0.5s ease;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
        /* Firefox */
    }

    .video-slider-track::-webkit-scrollbar {
        display: none;
        /* Chrome/Safari */
    }

    .video-slide {
        flex: 0 0 100%;
        /* Show 1 video at a time for focus, or adjust to 50% for 2 */
        scroll-snap-align: center;
        max-width: 600px;
        /* Limit video width */
        margin: 0 auto;
        /* Center single video */
        display: flex;
        justify-content: center;
    }

    @media (min-width: 768px) {
        .video-slide {
            flex: 0 0 48%;
            /* Show 2 videos on desktop */
        }
    }

    .video-card {
        background: #222;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #444;
        width: 100%;
    }

    .video-card video {
        border-radius: 5px;
        background: black;
        max-height: 400px;
    }

    .placeholder-video {
        aspect-ratio: 16/9;
        background: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        width: 100%;
    }

    .video-title {
        color: var(--color-gold);
        margin-top: 15px;
        font-size: 18px;
        text-align: center;
        font-weight: 600;
    }

    .video-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(217, 134, 0, 0.8);
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s;
    }

    .video-nav:hover {
        background: var(--color-gold);
    }

    .video-nav.prev {
        left: 0;
    }

    .video-nav.next {
        right: 0;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.video-slider-track');
        const prevBtn = document.querySelector('.video-nav.prev');
        const nextBtn = document.querySelector('.video-nav.next');

        if (track && prevBtn && nextBtn) {
            nextBtn.addEventListener('click', () => {
                track.scrollBy({ left: 320, behavior: 'smooth' }); // Scroll by roughly one card width
            });

            prevBtn.addEventListener('click', () => {
                track.scrollBy({ left: -320, behavior: 'smooth' });
            });
        }
    });
</script>