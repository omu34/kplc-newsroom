
<!-- <template>
    <div class="card relative float-start ">
        <div class="px-2 py-1 -mb-40">
            <button @click="createRecord" class="btn btn-default btn-primary">CreateButton</button>
        </div>
    </div>
</template> -->

<script>
export default {
    methods: {
        createRecord() {
            console.log('Create button clicked');
            this.$router.push({ name: 'create', params: { resourceName: 'banner' } });
            this.$router.push({ name: 'create', params: { resourceName: 'basic-banner' } });
            this.$router.push({ name: 'create', params: { resourceName: 'breadcrumb' } });
            this.$router.push({ name: 'create', params: { resourceName: 'featured-news' } });
            this.$router.push({ name: 'create', params: { resourceName: 'footer' } });
            this.$router.push({ name: 'create', params: { resourceName: 'header-navigation' } });
            this.$router.push({ name: 'create', params: { resourceName: 'latest-gallery' } });
            this.$router.push({ name: 'create', params: { resourceName: 'latest-news' } });
            this.$router.push({ name: 'create', params: { resourceName: 'latest-videos' } });
            this.$router.push({ name: 'create', params: { resourceName: 'search' } });
            this.$router.push({ name: 'create', params: { resourceName: 'tags' } });
        }
    }
}
</script>

<!-- <style scoped>
.card {
    display: flex;
    align-items: start;
    justify-content: start;
    height: 50%;
}
.btn {
    font-size: 16px;
    padding: 6px 10px;
}
</style> -->


