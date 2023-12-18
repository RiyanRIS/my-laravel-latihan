<template>
    <div>
        <h1>Daftar Pegawai</h1>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="pegawai in pegawais" :key="pegawai.id">
                    <td>{{ pegawai.id }}</td>
                    <td>{{ pegawai.nama }}</td>
                    <td>{{ pegawai.jabatan }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pegawais: []
        };
    },
    mounted() {
        this.getPegawais();
    },
    methods: {
        getPegawais() {
            axios.get('/api/pegawai').then(response => {
                this.pegawais = response.data.record;
            });
        }
    }
};
</script>