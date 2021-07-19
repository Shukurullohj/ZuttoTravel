<template>
    <div class="w-full ">
        <div class="row justify-center">
            <div class="col-md-8">
                <div class=" pt-10">
                    <div class="card-body">
                        <carousel v-if="imgData.length > 0">
                            <div v-for="(img, index) in imgData" :key="index">
                                <img style="height: 400.667px; " :src="img.picture" :alt="img.title" >
                            </div>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
    import carousel from 'vue-owl-carousel'

    export default {
        components: {
            carousel
        },
        props: {
            msg: String
        },
        data() {
            return {
                imgData: [],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    }
                },
                items: 1
            }
        },          
        mounted() {
            axios
            .get('http://127.0.0.1:8000/img')
            .then(res => {
                this.imgData = res.data;
            });
        }      
    }

</script>