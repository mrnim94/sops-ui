<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html" target="_blank">
            <img src="{{('public/frontend/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo" />
            <span class="ms-1 font-weight-bold text-white">SOPS UI by Nim</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2" />
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
                    <img src="{{('public/frontend/assets/img/team-3.jpg')}}" class="avatar" />
                    <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
                </a>
                <div class="collapse" id="ProfileNav" style>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/overview.html">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal ms-3 ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/settings.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-3 ps-1"> Settings </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signin/basic.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal ms-3 ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0" />
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder text-white">MANAGE ENCRYT</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">key</i>
                    <span class="nav-link-text ms-2 ps-1">Editor</span>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{('upload-file-raw')}}">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal ms-2 ps-1"> Encypt File </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{('adjust-encrypted-file')}}">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal ms-2 ps-1"> Adjust Encryted File </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0" />
            {{-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
                    <span class="nav-link-text ms-2 ps-1">Pages</span>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Profile <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="profileExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/overview.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Profile Overview </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/projects.html">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal ms-2 ps-1"> All Projects </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/profile/messages.html">
                                            <span class="sidenav-mini-icon"> M </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Messages </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal ms-2 ps-1"> Users <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="usersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/users/reports.html">
                                            <span class="sidenav-mini-icon"> R </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Reports </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/users/new-user.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal ms-2 ps-1"> New User </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal ms-2 ps-1"> Account <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="accountExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/settings.html">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Settings </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/billing.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Billing </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/invoice.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Invoice </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/account/security.html">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Security </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Projects <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="projectsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/general.html">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal ms-2 ps-1"> General </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/timeline.html">
                                            <span class="sidenav-mini-icon"> T </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Timeline </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/projects/new-project.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal ms-2 ps-1"> New Project </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal ms-2 ps-1"> Virtual Reality <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="vrExamples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/vr/vr-default.html">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal ms-2 ps-1"> VR Default </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/vr/vr-info.html">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal ms-2 ps-1"> VR Info </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/pricing-page.html">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Pricing Page </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/rtl-page.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal ms-2 ps-1"> RTL </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/widgets.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal ms-2 ps-1"> Widgets </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/charts.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> Charts </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/sweet-alerts.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-2 ps-1"> Sweet Alerts </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/pages/notifications.html">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal ms-2 ps-1"> Notifications </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white" aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
                    <span class="nav-link-text ms-2 ps-1">Applications</span>
                </a>
                <div class="collapse" id="applicationsExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/crm.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> CRM </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/kanban.html">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal ms-2 ps-1"> Kanban </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/wizard.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal ms-2 ps-1"> Wizard </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/datatables.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal ms-2 ps-1"> DataTables </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/calendar.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> Calendar </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/stats.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-2 ps-1"> Stats </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/applications/validation.html">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal ms-2 ps-1"> Validation </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white active" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
                    <span class="nav-link-text ms-2 ps-1">Ecommerce</span>
                </a>
                <div class="collapse show" id="ecommerceExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white active" data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Products <b class="caret"></b></span>
                            </a>
                            <div class="collapse show" id="productsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white active" href="new-product.html">
                                            <span class="sidenav-mini-icon"> N </span>
                                            <span class="sidenav-normal ms-2 ps-1"> New Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="edit-product.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Edit Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="product-page.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Product Page </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="products-list.html">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Products List </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                                <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal ms-2 ps-1"> Orders <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="ordersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/orders/list.html">
                                            <span class="sidenav-mini-icon"> O </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Order List </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/orders/details.html">
                                            <span class="sidenav-mini-icon"> O </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Order Details </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal ms-2 ps-1"> Referral </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white" aria-controls="authExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
                    <span class="nav-link-text ms-2 ps-1">Authentication</span>
                </a>
                <div class="collapse" id="authExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-2 ps-1"> Sign In <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signinExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signin/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signin/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signin/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-2 ps-1"> Sign Up <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signupExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signup/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signup/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/signup/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal ms-2 ps-1"> Reset Password <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="resetExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/reset/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/reset/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/reset/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal ms-2 ps-1"> Lock <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="lockExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/lock/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/lock/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/lock/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                                <span class="sidenav-mini-icon"> 2 </span>
                                <span class="sidenav-normal ms-2 ps-1"> 2-Step Verification <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="StepExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/verification/basic.html">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/verification/cover.html">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/verification/illustration.html">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal ms-2 ps-1"> Error <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="errorExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/error/404.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Error 404 </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://demos.creative-tim.com/material-dashboard-pro/pages/authentication/error/500.html">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Error 500 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <hr class="horizontal light" />
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder text-white">DOCS</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link text-white" aria-controls="basicExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">upcoming</i>
                    <span class="nav-link-text ms-2 ps-1">Basic</span>
                </a>
                <div class="collapse" id="basicExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#gettingStartedExample">
                                <span class="sidenav-mini-icon"> G </span>
                                <span class="sidenav-normal ms-2 ps-1"> Getting Started <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="gettingStartedExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> Q </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Quick Start </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/license/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal ms-2 ps-1"> License </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Contents </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Build Tools </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#foundationExample">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal ms-2 ps-1"> Foundation <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="foundationExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Colors </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/grid/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Grid </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/typography/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> T </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Typography </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/icons/material-dashboard" target="_blank">
                                            <span class="sidenav-mini-icon"> I </span>
                                            <span class="sidenav-normal ms-2 ps-1"> Icons </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link text-white" aria-controls="componentsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">view_in_ar</i>
                    <span class="nav-link-text ms-2 ps-1">Components</span>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal ms-2 ps-1"> Alerts </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/badge/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal ms-2 ps-1"> Badge </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal ms-2 ps-1"> Buttons </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/cards/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> Card </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> Carousel </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal ms-2 ps-1"> Collapse </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal ms-2 ps-1"> Dropdowns </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal ms-2 ps-1"> Forms </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/modal/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal ms-2 ps-1"> Modal </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/navs/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal ms-2 ps-1"> Navs </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal ms-2 ps-1"> Navbar </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Pagination </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Popovers </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/progress/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal ms-2 ps-1"> Progress </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-2 ps-1"> Spinners </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/tables/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal ms-2 ps-1"> Tables </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/material-dashboard" target="_blank">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal ms-2 ps-1"> Tooltips </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/creativetimofficial/ct-material-dashboard-pro/blob/master/CHANGELOG.md" target="_blank">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
                    <span class="nav-link-text ms-2 ps-1">Changelog</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>