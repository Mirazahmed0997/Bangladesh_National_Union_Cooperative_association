<div class="employees">
    <h2>ব্যবস্থাপনা কমিটি</h2>
    <div class="employee-cards">
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg" alt="John Doe">
            <h3>মোঃ জসিম উদ্দিন শেখ
            </h3>
            <p class="designation">CEO</p>
            <p class="details">John leads the company with vision and innovation.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Jane Smith">
            <h3>Jane Smith</h3>
            <p class="designation">Project Manager</p>
            <p class="details">Jane ensures projects run smoothly and efficiently.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Mike Brown">
            <h3>Mike Brown</h3>
            <p class="designation">Lead Developer</p>
            <p class="details">Mike builds robust and scalable software solutions.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
        <div class="employee-card">
            <img src="https://img3.stockfresh.com/files/k/kraska/m/97/808337_stock-photo-user-icon.jpg"
                alt="Emily White">
            <h3>Emily White</h3>
            <p class="designation">Designer</p>
            <p class="details">Emily crafts beautiful and intuitive UI/UX designs.</p>
        </div>
    </div>
</div>


<style>
    .employees {
        flex: 1 1 55%;
        text-align: center;
    }

    .employees h2 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 20px;
    }

    .employee-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;


        max-height: 800px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .employee-cards::-webkit-scrollbar {
        width: 8px;
    }

    .employee-cards::-webkit-scrollbar-thumb {
        background: #32aaba;
        border-radius: 4px;
    }

    .employee-card.employee-card {
        flex: 1 1 calc(50% - 20px);
        /* Two cards per row on desktop */
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .employee-card:hover {
        transform: translateY(-5px);
    }

    .employee-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .employee-card h3 {
        margin-bottom: 5px;
        font-size: 1.2rem;
        color: #333;
    }

    .employee-card .designation {
        font-size: 0.95rem;
        color: #32aaba;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .employee-card .details {
        font-size: 0.9rem;
        color: #555;
    }
</style>