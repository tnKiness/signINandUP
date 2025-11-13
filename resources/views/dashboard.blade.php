<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Vườn Cây Thương Hiệu — Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="dash-header">
        <div class="dash-header-inner">
            <div class="brand">
                <img src="{{ asset('images/612bd561b1f1215c5bed49d7d40610264bd7317e.svg') }}" alt="Logo" class="brand-logo">
                <div class="brand-text">
                    <div class="brand-title">Vườn Cây Thương Hiệu</div>
                    <div class="brand-sub">By VLBC</div>
                </div>
            </div>

            <nav class="dash-nav">
                <a href="#">Trung tâm Hỗ trợ</a>
                <a href="#">Thông báo</a>
                <a href="#">Tài khoản</a>
            </nav>

            <div class="dash-actions">
                <button class="btn-outline">Upgrade plan</button>
                <div class="avatar">
                    <img src="{{ asset('images/2ca4b692de4337ebe4a66ec0592112a89f548e70.svg') }}" alt="avatar">
                </div>
            </div>
        </div>
    </header>

    <main class="dashboard">
        <section class="summary">
            <div class="summary-grid">
                <div class="summary-card">
                    <div class="card-title">Thương hiệu hoạt động</div>
                    <div class="card-number">4/4</div>
                    <div class="card-note">Tổng số thương hiệu bạn đang quản lý</div>
                </div>
                <div class="summary-card warning">
                    <div class="card-title">Cần chăm sóc</div>
                    <div class="card-number">1</div>
                </div>
                <div class="summary-card grow">
                    <div class="card-title">Đang tăng trưởng</div>
                    <div class="card-number">2</div>
                </div>
                <div class="summary-card ok">
                    <div class="card-title">Đã hoàn thiện</div>
                    <div class="card-number">1</div>
                </div>
            </div>

            <div class="controls">
                <input class="search" placeholder="Tìm kiếm thương hiệu..." />
                <div class="filters">
                    <select>
                        <option>Tất cả trạng thái</option>
                        <option>Hoạt động</option>
                        <option>Cần chăm sóc</option>
                    </select>
                    <button class="btn-primary">Thêm thương hiệu</button>
                </div>
            </div>
        </section>

        <section class="cards">
            <div class="cards-grid">
                @for ($i = 0; $i < 12; $i++)
                    <article class="brand-card">
                        <div class="brand-card-head">
                            <div class="brand-avatar">E</div>
                            <div>
                                <div class="brand-name">Eco Garden</div>
                                <div class="brand-status">Cập nhật: 2 giờ trước</div>
                            </div>
                        </div>
                        <p class="brand-desc">Tán Cây: Chiến dịch marketing đang hoạt động tốt. Tỷ lệ chuyển đổi tăng 23% so với tháng trước.</p>
                        <div class="brand-footer">
                            <div class="progress">Gốc 100% · Thân 75%</div>
                            <button class="btn-small">Quản lý thương hiệu</button>
                        </div>
                    </article>
                @endfor
            </div>
        </section>

        <footer class="dash-footer">
            <div class="footer-inner">
                <div class="footer-left">2025 Vietnam Legacy Branding Center. All rights reserved.</div>
                <div class="footer-right">Phiên bản v2.1.0</div>
            </div>
        </footer>
    </main>

</body>
</html>
