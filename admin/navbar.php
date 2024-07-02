<aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fi fi-rr-apps"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Perpustakaan</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link">
                        <i class="fi fi-rr-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/addbook.html" class="sidebar-link">
                        <i class="fi fi-rr-book-alt"></i>
                        <span>Add Book Stock</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/addstudent.html" class="sidebar-link">
                        <i class="fi fi-rr-user-add"></i>
                        <span>Add Student</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/issuebook.html" class="sidebar-link">
                        <i class="fi fi-rr-exclamation"></i>
                        <span>Issue Book</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/returnbook.html" class="sidebar-link">
                        <i class="fi fi-rr-refresh"></i>
                        <span>Return Books</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fi fi-rr-shield-check"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="pages/login.html" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages/register.html" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>   
            </ul>
            <div class="sidebar-footer">
                <a href="/home.html" class="sidebar-link">
                    <i class="fi fi-rr-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>