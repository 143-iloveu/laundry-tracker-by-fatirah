<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BubbleUp Laundry Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; }
        .chart-card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .stat-card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: transform 0.2s; }
        .stat-card:hover { transform: translateY(-3px); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="dashboard.html"><i class="fas fa-soap me-2"></i>BubbleUp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="dashboard.html"><i class="fas fa-chart-pie me-1"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="active-orders.html"><i class="fas fa-spinner me-1"></i> Active Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="clothing-inventory.html"><i class="fas fa-tshirt me-1"></i> Clothing Inventory</a></li>
            </ul>
            <button class="btn btn-outline-light btn-sm" onclick="logout()"><i class="fas fa-sign-out-alt me-1"></i> Logout</button>
        </div>
    </div>
</nav>

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-dark">Laundry Analytics Dashboard</h2>
            <p class="text-muted mb-0">Welcome back, User! Here is your operation overview.</p>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card stat-card bg-white p-3 text-center">
                <h6 class="text-muted uppercase small">Total Tracked Items</h6>
                <h2 class="fw-bold text-primary m-0">48</h2>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card stat-card bg-white p-3 text-center">
                <h6 class="text-muted uppercase small">Active Loads</h6>
                <h2 class="fw-bold text-warning m-0">3</h2>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card stat-card bg-white p-3 text-center">
                <h6 class="text-muted uppercase small">Ready for Pickup</h6>
                <h2 class="fw-bold text-success m-0">5</h2>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card stat-card bg-white p-3 text-center">
                <h6 class="text-muted uppercase small">This Month's Cost</h6>
                <h2 class="fw-bold text-danger m-0">RM32.50</h2>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-tasks me-2"></i>1. Current Processing Status</h5>
                <div style="height: 250px;"><canvas id="statusChart"></canvas></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-chart-line me-2"></i>2. Monthly Laundry Load Volume (kg)</h5>
                <div style="height: 250px;"><canvas id="trendChart"></canvas></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-tags me-2"></i>3. Clothes Type Distribution</h5>
                <div style="height: 250px;"><canvas id="categoryChart"></canvas></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-calendar-day me-2"></i>4. Weekly Frequency Distribution</h5>
                <div style="height: 250px;"><canvas id="dayChart"></canvas></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-wallet me-2"></i>5. Resource Cost Analysis (RM)</h5>
                <div style="height: 250px;"><canvas id="costChart"></canvas></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-card p-3 bg-white">
                <h5 class="fw-bold text-secondary mb-3"><i class="fas fa-thermometer-half me-2"></i>6. Temperature Settings Share</h5>
                <div style="height: 250px;"><canvas id="tempChart"></canvas></div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-1 small">BubbleUp Laundry Tracker Dashboard Portal</p>
        <p class="mb-0 text-muted small">Course: IMS566 | Managed by Student: Fatirah</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Protect page route from unauthenticated entries
    if(localStorage.getItem('isLoggedIn') !== 'true') { window.location.href = 'index.html'; }
    function logout() { localStorage.removeItem('isLoggedIn'); window.location.href = 'index.html'; }

    // --- CHART ENGINE ARCHITECTURE ---
    const optionsConfig = { responsive: true, maintainAspectRatio: false };

    // 1. Current Status (Donut)
    new Chart(document.getElementById('statusChart'), {
        type: 'doughnut',
        data: {
            labels: ['In Washer', 'In Dryer', 'Folding Phase', 'Ready for Pickup'],
            datasets: [{ data: [1, 2, 1, 5], backgroundColor: ['#0dcaf0', '#ffc107', '#a855f7', '#198754'] }]
        },
        options: optionsConfig
    });

    // 2. Monthly Load Trend (Line)
    new Chart(document.getElementById('trendChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{ label: 'Weight (kg)', data: [18, 22, 15, 30, 25, 35], borderColor: '#3b82f6', tension: 0.3, fill: true, backgroundColor: 'rgba(59, 130, 246, 0.1)' }]
        },
        options: optionsConfig
    });

    // 3. Clothing Category (Horizontal Bar)
    new Chart(document.getElementById('categoryChart'), {
        type: 'bar',
        data: {
            labels: ['Bedding', 'Daily Wear', 'Delicates', 'Athleisure'],
            datasets: [{ label: 'Item Count', data: [12, 25, 5, 8], backgroundColor: '#6366f1' }]
        },
        options: { indexAxis: 'y', ...optionsConfig }
    });

    // 4. Peak Days (Vertical Bar)
    new Chart(document.getElementById('dayChart'), {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{ label: 'Cycles Run', data: [2, 1, 3, 1, 4, 8, 7], backgroundColor: '#f59e0b' }]
        },
        options: optionsConfig
    });

    // 5. Cost Breakdown (Stacked Bar)
    new Chart(document.getElementById('costChart'), {
        type: 'bar',
        data: {
            labels: ['March', 'April', 'May'],
            datasets: [
                { label: 'Utilities', data: [10, 15, 12], backgroundColor: '#0dcaf0' },
                { label: 'Detergents', data: [8, 12, 10], backgroundColor: '#10b981' }
            ]
        },
        options: { scales: { x: { stacked: true }, y: { stacked: true } }, ...optionsConfig }
    });

    // 6. Temperature Share (Pie)
    new Chart(document.getElementById('tempChart'), {
        type: 'pie',
        data: {
            labels: ['Cold Wash (30°C)', 'Warm Wash (40°C)', 'Hot Wash (60°C)'],
            datasets: [{ data: [65, 25, 10], backgroundColor: ['#60a5fa', '#fbbf24', '#f87171'] }]
        },
        options: optionsConfig
    });
</script>
</body>
</html>