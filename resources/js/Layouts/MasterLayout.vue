<script setup>

import TheSidebar from '@/Layouts/body/sidebar.vue'
import TheHeader from '@/Layouts/body/header.vue'
import TheFooter from '@/Layouts/body/footer.vue'



</script>

<template>

    <div class="nk-app-root ">
        <div class="nk-main ">
            <!-- Menu -->

            <TheSidebar/>
            <!-- / Menu -->

            <div class="nk-wrap ">
                <TheHeader/>


                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <slot/>
                            </div>
                        </div>
                    </div>
                </div>
                <TheFooter/>

            </div>
        </div>
    </div>




</template>

<script >

</script>
