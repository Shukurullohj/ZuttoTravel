<template>
    <div>
        <div class="level">
            <img :src="avatar" class="mr-1 relative rounded-full w-32 h-32">
            <h1 v-text="user.name"></h1>
        </div>

        <form  method="POST" enctype="multipart/form-data">
            
            <label >
        <i class="" class="fa fa-pencil absolute top-20 right-5 bg-blue-300 p-1 rounded-full" aria-hidden="true"></i>
        <input name="avatar" accept="image/*" @change="onChange" type='file' class="hidden" />
    </label>
        </form>

    </div>

</template>

<script>
    
    export default {
        props: ['user'],
        
        data() {
            return {
                avatar: `/storage/${this.user.avatar_path}`
            };
        },
        
        
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;
                
                let avatar = e.target.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(avatar);
                reader.onload = e => {
                    this.avatar = e.target.result;
                };
                this.persist(avatar);
            },
            persist(avatar) {
                let data = new FormData();
                data.append('avatar', avatar);
                axios.post(`/api/users/${this.user.name}/avatar`, data)
                    .then(() => flash('Avatar uploaded!'));
            }
    }
}
</script>