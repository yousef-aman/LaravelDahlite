<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const darkMode = ref(false);

async function fetchDarkMode() {
    try {
        const response = await axios.get('/get-dark-mode');
        darkMode.value = response.data.darkMode;
        document.body.classList.toggle('dark-mode', darkMode.value);
    } catch (error) {
        console.error(error);
    }
}

async function toggleDarkMode() {
    darkMode.value = !darkMode.value;
    document.body.classList.toggle('dark-mode', darkMode.value);

    try {
        await axios.post('/toggle-dark-mode', { darkMode: darkMode.value });
    } catch (error) {
        console.error(error);
    }
}

onMounted(fetchDarkMode);

</script>

<template>

    <div class="nk-header nk-header-fixed">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1"><a class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"
                                                                href="#"><em
                    class="icon ni ni-menu"></em></a></div>
                <div class="nk-header-brand d-xl-none"><a class="logo-link" href="index-2.html"><img
                    alt="logo" class="logo-light logo-img" src="images/logo.png"
                    srcset="/demo1/images/logo2x.png 2x"><img alt="logo-dark" class="logo-dark logo-img"
                                                              src="images/logo-dark.png" srcset="/demo1/images/logo-dark2x.png 2x"></a></div>
                <div class="nk-header-news d-none d-xl-block">
<!--                    <div class="nk-news-list"><a class="nk-news-item" href="#">-->
<!--                        <div class="nk-news-icon"><em class="icon ni ni-card-view"></em></div>-->
<!--                        <div class="nk-news-text"><p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span>-->
<!--                        </p><em class="icon ni ni-external"></em></div>-->
<!--                    </a></div>-->
                </div>
                <div class="nk-header-tools">


                    <ul class="nk-quick-nav">
                        <button  :class="['btn', 'btn-outline-' + (darkMode ? 'light' : 'dark')]" @click="toggleDarkMode">
                            {{ darkMode ? 'Light' : 'Dark' }}
                        </button>
                        <li class="dropdown language-dropdown d-none d-sm-block me-n1"><a class="dropdown-toggle nk-quick-nav-icon"
                                                                                          data-bs-toggle="dropdown"
                                                                                          href="#">
                            <div class="quick-icon border border-light"><img alt=""
                                                                             class="icon"
                                                                             src="images/flags/english-sq.png"></div>
                        </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                <ul class="language-list">
                                    <li><a class="language-item" href="#"><img alt=""
                                                                               class="language-flag"
                                                                               src="images/flags/english.png"><span
                                        class="language-name">English</span></a></li>
                                    <li><a class="language-item" href="#"><img alt=""
                                                                               class="language-flag"
                                                                               src="images/flags/spanish.png"><span
                                        class="language-name">Español</span></a></li>
                                    <li><a class="language-item" href="#"><img alt=""
                                                                               class="language-flag"
                                                                               src="images/flags/french.png"><span
                                        class="language-name">Français</span></a></li>
                                    <li><a class="language-item" href="#"><img alt=""
                                                                               class="language-flag"
                                                                               src="images/flags/turkey.png"><span
                                        class="language-name">Türkçe</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown user-dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                              href="#">
                            <div class="user-toggle">
                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">Administrator</div>
                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                </div>
                            </div>

                        </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar"><span>AB</span></div>
                                        <div class="user-info"><span
                                            class="lead-text">Abu Bin Ishtiyak</span><span class="sub-text">info@softnio.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="user-profile-regular.html"><em
                                            class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                        </li>
                                        <li><a href="user-profile-setting.html"><em
                                            class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="user-profile-activity.html"><em
                                            class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#"><em
                                            class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown notification-dropdown me-n1"><a class="dropdown-toggle nk-quick-nav-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            href="#">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Notifications</span><a
                                    href="#">Mark All as Read</a></div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-foot center"><a href="#">View All</a></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>
