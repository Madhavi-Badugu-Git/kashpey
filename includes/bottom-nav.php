<!-- Bottom Navigation Component -->
<div class="bottom-nav">
    <a href="retailer-dashboard" class="nav-item <?= (basename($_SERVER['PHP_SELF']) == 'retailer-dashboard.php' || basename($_SERVER['PHP_SELF']) == 'retailer-dashboard') ? 'active' : '' ?>">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <a href="retailer-search" class="nav-item <?= (basename($_SERVER['PHP_SELF']) == 'retailer-search.php' || basename($_SERVER['PHP_SELF']) == 'retailer-search') ? 'active' : '' ?>">
        <i class="fas fa-search"></i>
        <span>Search</span>
    </a>
    <a href="retailer-history" class="nav-item <?= (basename($_SERVER['PHP_SELF']) == 'retailer-history.php' || basename($_SERVER['PHP_SELF']) == 'retailer-history') ? 'active' : '' ?>">
        <i class="fas fa-history"></i>
        <span>History</span>
    </a>
</div>

<style>
.bottom-nav {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255,255,255,0.98);
    border-top: 1px solid #e8ecf1;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 8px 16px 20px;
    z-index: 100;
    max-width: 500px;
    margin: 0 auto;
    backdrop-filter: blur(10px);
}
.nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 6px 12px;
    border-radius: 30px;
    font-family: 'Inter', sans-serif;
    flex: 1;
    max-width: 80px;
    text-decoration: none;
}
.nav-item i {
    font-size: 1.3rem;
    color: #a0aec0;
}
.nav-item span {
    font-size: 0.65rem;
    font-weight: 600;
    color: #a0aec0;
}
.nav-item.active i,
.nav-item.active span {
    color: #00b4d8;
}
.nav-item:hover {
    background: rgba(0,180,216,0.05);
}
</style>