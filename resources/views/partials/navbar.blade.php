<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">stocKing</a>
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'add_items') ? 'active' : '' }}" href="/add_items">Add items</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'subscribe') ? 'active' : '' }}" href="/subscribe">Subscribe</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'transactionList') ? 'active' : '' }}" href="/transactionList">Transaction</a>
                </li>
            </ul>
            <ul class = "navbar-nav ms auto">
                <li class = "nav-item">
                    <a href = "/login" class="nav-link {{ ($title === 'login') ? 'active' : '' }}">login</a>
                </li>
            </div>
        </div>
    </nav>
