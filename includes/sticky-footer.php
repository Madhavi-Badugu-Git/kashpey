<div class="sticky-footer">
    <div class="explorebg" style="background: #010707;">
        <div class="container">
            <div class="footer-bar">
                <div class="footer-marquee">
                    <marquee direction="right" behavior="alternate" scrollamount="4">
                        Interested in <?php echo $comp_name ; ?>? 
                    </marquee>
                </div>
                <div class="footer-button">
                    <a href="#" class="connect-btn fade_open">Connect With Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Sticky footer – fixed at bottom */
.sticky-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background: #010707;
    box-shadow: 0 -4px 12px rgba(0,0,0,0.2);
}

/* Flex bar layout: left (marquee) + right (button) */
.footer-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 8px 24px;
}

/* Marquee container – takes available space */
.footer-marquee {
    flex: 1;
    min-width: 0; /* allows marquee to shrink */
}

/* Marquee styling – clean, no black border */
.footer-marquee marquee {
    background: rgba(255,255,255,0.08);
    padding: 8px 20px;
    border-radius: 40px;
    font-weight: 700;
    color: #fff;
    font-size: 1rem;
    border: 1px solid rgba(41,182,246,0.3);
    width: 100%;
    white-space: nowrap;
    letter-spacing: 1px;
}

/* Button container – pushed to right */
.footer-button {
    flex-shrink: 0;
}

/* Button styling – brand colors (navy + gold) */
.connect-btn {
    display: inline-block;
    background: linear-gradient(135deg, #0d3b6e, #0288d1);
    color: #fff;
    padding: 10px 28px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 800;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 4px 12px rgba(2,136,209,0.3);
    white-space: nowrap;
}

.connect-btn:hover {
    background: linear-gradient(135deg, #f9a825, #ffc107);
    color: #0d3b6e;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(249,168,37,0.4);
}

/* Responsive: on mobile, stack items vertically */
@media (max-width: 768px) {
    .footer-bar {
        flex-direction: column;
        padding: 12px 16px;
        gap: 12px;
    }
    .footer-marquee marquee {
        font-size: 0.85rem;
        padding: 6px 12px;
    }
    .connect-btn {
        padding: 8px 24px;
        font-size: 0.85rem;
    }
}
</style>