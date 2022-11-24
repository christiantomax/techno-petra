import { mapActions, mapGetters } from "vuex";
import Flickity from 'vue-flickity';

export default {
    created(){
        this.pushGlobalRouteStacks({
            "name": "Home",
            "route": "/"
        })
        this.fetchSliderList()
    },

    components: {
        Flickity
    },
      
    computed: {
        ...mapGetters(['getMasterSliderFrontendList']),
    },
    data() {
        return {
            flickityOptions: {
            initialIndex: 0,
            prevNextButtons: false,
            pageDots: true,
            wrapAround: true,
            cellAlign:'left',
            // any options from Flickity can be used
            },
            campusLifeSelect:0,
        }
    },
    methods: {
        ...mapActions(["pushGlobalRouteStacks", "fetchMasterSliderListFrontend"]),
        next() {
            this.$refs.flickity.next();
        },
        
        previous() {
            this.$refs.flickity.previous();
        },
        select(n){
            this.$refs.flickity.select(n);
        },

        campusLife(n){
            this.campusLifeSelect=n;
        },

        fetchSliderList(){
            this.fetchMasterSliderListFrontend({
                "q": '',
                "searchCategory": "*",
                "sortCategory": 'created_at',
                "sortDirection": 'desc',
                "page": -1,
            }).then(() => {
                console.log(this.getMasterSliderFrontendList)
            })
        }
    }
}