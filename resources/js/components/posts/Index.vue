<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">POSTS</div>

                    <div class="card-body">
                        <router-link :to="{ name: 'create-customer' }" class="btn btn-md btn-success">TAMBAH POST</router-link>

                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>

                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>GENDER</th>
                                    <th>IS_MARRIED</th>
                                    <th>ADDRESS</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(post, index) in posts" :key="post.id">
                                    <td>{{ post.name }}</td>
                                    <td>{{ post.email }}</td>
                                    <td>{{ post.gender }}</td>
                                    <td>{{ post.is_married }}</td>
                                    <td>{{ post.address }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'update-customer', params: { id: post.id }}" class="btn btn-sm btn-primary">EDIT</router-link>
                                        <button @click.prevent="PostDelete(post.id, index)" class="btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = `http://localhost:8000/api/get-customer`;
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        }
    }
</script>
