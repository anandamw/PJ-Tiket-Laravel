@extends('admin.layouts.appAdmin')

@section('content')
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul
                                class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>
                                <li>
                                    <form class="src-form position-relative">
                                        <input type="text" class="form-control" placeholder="Search here.." />
                                        <button type="submit"
                                            class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                            <i data-feather="search"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul
                                class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                                <li class="header-right-item">
                                    <div class="dropdown notifications language">
                                        <button class="btn btn-secondary border-0 p-0 position-relative" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="assets/images/united-states.jpg" class="rounded-circle wh-22"
                                                alt="united-states" />
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/united-states.jpg"
                                                                class="wh-22 rounded-circle" alt="united-states" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>English</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/spain.png" class="wh-22 rounded-circle"
                                                                alt="spain" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Spain</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/germany.png"
                                                                class="wh-22 rounded-circle" alt="germany" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>Germany</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown notifications email">
                                        <button class="btn btn-secondary border-0 p-0 position-relative" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="mail"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <h5
                                                class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                                <span>Email </span>
                                                <button class="p-0 m-0 bg-transparent border-0">
                                                    Clear All
                                                </button>
                                            </h5>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/pdf.svg" alt="pdf" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>
                                                                Help/Support
                                                                Desk
                                                            </h4>
                                                            <span>11:47 PM
                                                                Wednesday</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/notifications-1.jpg"
                                                                alt="notifications" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>
                                                                Create a new
                                                                project for
                                                                client
                                                            </h4>
                                                            <span>April,
                                                                18</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/notifications-2.jpg"
                                                                alt="notifications" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h4>
                                                                Project
                                                                Management
                                                            </h4>
                                                            <span>April,
                                                                19</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a href="notification.html"
                                                class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                                View All
                                                <i data-feather="chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown notifications noti">
                                        <button class="btn btn-secondary border-0 p-0 position-relative badge"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="bell"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                            <h5
                                                class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                                <span>Notifications </span>
                                                <button class="p-0 m-0 bg-transparent border-0">
                                                    Clear All
                                                </button>
                                            </h5>
                                            <div class="notification-menu">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <h4>
                                                        8 Invoices have been
                                                        paid
                                                    </h4>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/pdf.svg" alt="pdf" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p>
                                                                Invoices
                                                                have been
                                                                paid to the
                                                                company.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <span>11:47 PM
                                                        Wednesday</span>
                                                </a>
                                            </div>
                                            <div class="notification-menu mb-0">
                                                <a href="notification.html" class="dropdown-item p-0">
                                                    <h4>
                                                        Create a new project
                                                        for client
                                                    </h4>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/notifications-1.jpg"
                                                                alt="notifications" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p>
                                                                Allow users
                                                                to like
                                                                products in
                                                                your
                                                                WooCommerce
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <span>April, 18</span>
                                                </a>
                                            </div>
                                            <a href="notification.html"
                                                class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                                View All
                                                <i data-feather="chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item d-none d-md-block">
                                    <div class="today-date">
                                        <span id="digitalDate"></span>
                                        <i data-feather="calendar"></i>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                            data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle wh-54" src="assets/images/admin.jpg"
                                                    alt="admin" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <span class="degeneration">Admin</span>
                                                        <div class="d-flex align-content-center">
                                                            <h3>
                                                                Adison Jeck
                                                            </h3>
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="profile.html">
                                                    <i data-feather="user"></i>
                                                    <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="account.html">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="logout.html">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
                <h3 class="mb-sm-0 mb-1 fs-18">Modals</h3>
                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="index.html" class="text-decoration-none">
                            <i class="ri-home-2-line" style="position: relative; top: -1px"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Modals</span>
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">Live Demo Modal</h4>
                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview-tab-pane" type="button" role="tab"
                                        aria-controls="preview-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code-tab" data-bs-toggle="tab"
                                        data-bs-target="#code-tab-pane" type="button" role="tab"
                                        aria-controls="code-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                    aria-labelledby="preview-tab" tabindex="0">
                                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Modal title
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code-tab-pane" role="tabpanel" aria-labelledby="code-tab"
                                    tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;
Launch demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="exampleModalLabel"&gt;Modal title&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Save changes&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">
                                Static Backdrop Modal
                            </h4>
                            <ul class="nav nav-tabs mb-4" id="myTab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview2-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview2-tab-pane" type="button" role="tab"
                                        aria-controls="preview2-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code2-tab" data-bs-toggle="tab"
                                        data-bs-target="#code2-tab-pane" type="button" role="tab"
                                        aria-controls="code2-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="preview2-tab-pane" role="tabpanel"
                                    aria-labelledby="preview2-tab" tabindex="0">
                                    <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Launch static backdrop modal
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                        Modal title
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Understood
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code2-tab-pane" role="tabpanel"
                                    aria-labelledby="code2-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode2">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode2">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold" data-bs-toggle="modal" data-bs-target="#staticBackdrop"&gt;
Launch static backdrop modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="staticBackdropLabel"&gt;Modal title&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Understood&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">
                                Scrolling long content modal
                            </h4>
                            <ul class="nav nav-tabs mb-4" id="myTab3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview3-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview3-tab-pane" type="button" role="tab"
                                        aria-controls="preview3-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code3-tab" data-bs-toggle="tab"
                                        data-bs-target="#code3-tab-pane" type="button" role="tab"
                                        aria-controls="code3-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="preview3-tab-pane" role="tabpanel"
                                    aria-labelledby="preview3-tab" tabindex="0">
                                    <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                        Scrolling modal
                                    </button>

                                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdrop3Label">
                                                        Modal Scrolling
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal Scrolling
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit. Ut
                                                        consequatur sit sed
                                                        cumque iusto
                                                        reiciendis expedita
                                                        magni, ullam
                                                        deleniti earum
                                                        soluta maiores id
                                                        obcaecati deserunt
                                                        quas minus illo
                                                        necessitatibus.
                                                        Dicta! Lorem, ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Ipsum, praesentium
                                                        perspiciatis
                                                        sapiente blanditiis
                                                        itaque incidunt
                                                        explicabo, quo modi
                                                        veniam esse ratione,
                                                        magnam maiores id
                                                        facilis architecto
                                                        cum iusto corporis
                                                        eaque. Lorem ipsum
                                                        dolor sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Cum autem delectus
                                                        quo omnis, beatae
                                                        quas nostrum
                                                        perferendis illo!
                                                        Sunt fugit rem
                                                        doloremque eum amet
                                                        velit porro, dolore
                                                        et laudantium
                                                        debitis? Lorem ipsum
                                                        dolor, sit amet
                                                        consectetur
                                                        adipisicing elit.
                                                        Exercitationem autem
                                                        asperiores
                                                        voluptates
                                                        praesentium
                                                        reiciendis. Ea nemo
                                                        fuga nihil
                                                        consectetur ipsum
                                                        facere optio
                                                        quibusdam, officia
                                                        blanditiis? Delectus
                                                        laudantium
                                                        reiciendis fuga
                                                        corporis?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Understood
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code3-tab-pane" role="tabpanel"
                                    aria-labelledby="code3-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode3">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode3">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"&gt;
Launch static backdrop modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-dialog-scrollable"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="staticBackdrop3Label"&gt;Modal title&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Understood&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">
                                Vertically centered Modal
                            </h4>
                            <ul class="nav nav-tabs mb-4" id="myTab4" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview4-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview4-tab-pane" type="button" role="tab"
                                        aria-controls="preview4-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code4-tab" data-bs-toggle="tab"
                                        data-bs-target="#code4-tab-pane" type="button" role="tab"
                                        aria-controls="code4-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent4">
                                <div class="tab-pane fade show active" id="preview4-tab-pane" role="tabpanel"
                                    aria-labelledby="preview4-tab" tabindex="0">
                                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                        Center demo modal
                                    </button>

                                    <div class="modal fade" id="exampleModal4" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Modal title
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal Center
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code4-tab-pane" role="tabpanel"
                                    aria-labelledby="code4-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode4">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode4">
&lt;button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal4"&gt;
Center demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-dialog-centered"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header"&gt;
&lt;h1 class="modal-title fs-5" id="exampleModalLabel"&gt;Modal title&lt;/h1&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="modal-body"&gt;
Hello Modal Center
&lt;/div&gt;
&lt;div class="modal-footer"&gt;
&lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
&lt;button type="button" class="btn btn-primary text-white"&gt;Save changes&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">Extra large modal</h4>
                            <ul class="nav nav-tabs mb-4" id="myTab5" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview5-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview5-tab-pane" type="button" role="tab"
                                        aria-controls="preview5-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code5-tab" data-bs-toggle="tab"
                                        data-bs-target="#code5-tab-pane" type="button" role="tab"
                                        aria-controls="code5-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent5">
                                <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel"
                                    aria-labelledby="preview5-tab" tabindex="0">
                                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalxl">
                                        Extra large modal
                                    </button>

                                    <div class="modal fade" id="exampleModalxl" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Extra large modal
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal Center
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code5-tab-pane" role="tabpanel"
                                    aria-labelledby="code5-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode5">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode5">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModalxl"&gt;
Center demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModalxl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-xl"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="exampleModalLabel"&gt;Modal title&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal Center
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Save changes&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">Large modal</h4>
                            <ul class="nav nav-tabs mb-4" id="myTab6" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview6-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview6-tab-pane" type="button" role="tab"
                                        aria-controls="preview6-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code6-tab" data-bs-toggle="tab"
                                        data-bs-target="#code6-tab-pane" type="button" role="tab"
                                        aria-controls="code6-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent6">
                                <div class="tab-pane fade show active" id="preview6-tab-pane" role="tabpanel"
                                    aria-labelledby="preview6-tab" tabindex="0">
                                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#exampleModallg">
                                        Large modal
                                    </button>

                                    <div class="modal fade" id="exampleModallg" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Large modal
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal Center
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code6-tab-pane" role="tabpanel"
                                    aria-labelledby="code6-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode6">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode6">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModallg"&gt;
Large modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModallg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-lg"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="exampleModalLabel"&gt;Large modal&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal Center
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Save changes&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4">
                                Checkboxes and radios List
                            </h4>
                            <ul class="nav nav-tabs mb-4" id="myTab7" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="preview7-tab" data-bs-toggle="tab"
                                        data-bs-target="#preview7-tab-pane" type="button" role="tab"
                                        aria-controls="preview8-tab-pane" aria-selected="true">
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="code8-tab" data-bs-toggle="tab"
                                        data-bs-target="#code8-tab-pane" type="button" role="tab"
                                        aria-controls="code8-tab-pane" aria-selected="false">
                                        Code
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent8">
                                <div class="tab-pane fade show active" id="preview8-tab-pane" role="tabpanel"
                                    aria-labelledby="preview8-tab" tabindex="0">
                                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalsm">
                                        Small modal
                                    </button>

                                    <div class="modal fade" id="exampleModalsm" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Small modal
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hello Modal Center
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary text-white">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code8-tab-pane" role="tabpanel"
                                    aria-labelledby="code6-tab" tabindex="0">
                                    <button
                                        class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                        data-clipboard-target="#basicAlertsCode8">
                                        Copy
                                    </button>
                                    <pre class="line-numbers pt-0 pb-0 ps-25 pe-25 mb-0">
<code class="language-markup" id="basicAlertsCode8">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModalsm"&gt;
Small modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModalsm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-sm"&gt;
&lt;div class="modal-content"&gt;
 &lt;div class="modal-header"&gt;
     &lt;h1 class="modal-title fs-5" id="exampleModalLabel"&gt;Small modal&lt;/h1&gt;
     &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="modal-body"&gt;
     Hello Modal Center
 &lt;/div&gt;
 &lt;div class="modal-footer"&gt;
     &lt;button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
     &lt;button type="button" class="btn btn-primary text-white"&gt;Save changes&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-grow-1"></div>

            <footer class="footer-area bg-white text-center rounded-top-10">
                <p class="fs-14">
                    © <span class="text-primary">Farol</span> is Proudly
                    Owned by
                    <a href="https://hibootstrap.com/" target="_blank" class="text-decoration-none">HiBootstrap</a>
                </p>
            </footer>
        </div>
    </div>

    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">
                Theme Settings
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                RTL / LTR
            </h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider" />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Light / Dark
            </h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span>
                <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Only Sidebar Light / Dark
            </h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span>
                <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Only Header Light / Dark
            </h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span>
                <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Only Footer Light / Dark
            </h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span>
                <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Card Style Radius / Square
            </h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span>
                <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Card Style BG White / Gray
            </h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span>
                <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">
                Container Style Fluid / Boxed
            </h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span>
                <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>
@endsection
