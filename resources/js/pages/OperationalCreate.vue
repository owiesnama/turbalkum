<script>
export default {
    data(){
        return{
            saleMethod:1,
            services:[],
            service:false,
        }
    },

    computed:{
        isSale(){
            return this.saleMethod == 1  ? true : false
        }
    },

    methods:{
        fetchServices(){
            axios.get(`yourendpoint/${this.service}`)
                .then(response =>{

                })
                .catch(err =>{

                })
        },


    }
}
</script>
<style lang='css'>

</style>