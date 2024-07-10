<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            portföyü güncelle
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        init(){
                if(`{{ $portfolio->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $portfolio->category->parent->parent_id }}`,1); // arsa
                    this.loadChildren(`{{ $portfolio->category->parent_id }}`,2); //kiralik
                }
                if(!`{{ $portfolio->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $portfolio->category->parent_id }}`,1); //kiralik
                    this.loadChildren(`{{ $portfolio->category_id }}`,2); // arsa
                }
                this.selected2ndCategory = `{{ $portfolio->category_id }}`
                const townUrl = `{{ route('province.towns',$portfolio->province) }}`
                this.loadTowns(townUrl)
                this.loadDistricts(`{{ $portfolio->town_id }}`)
                this.loadInfo(`{{ $portfolio->category_id }}`)
                let input = `{{ $portfolio->price_in_tl }}`
                let number = parseInt(input.replace(/\D/g, ''));
                if (!isNaN(number)) {
                    let formatted = number.toLocaleString('tr-TR')
                    this.formattedNumber = formatted
                        }
        },
        firstLevelChildren:[],
        secondLevelChildren:[],
        filterable:0,
        selectedCategory:`{{ $portfolio->category_id }}`,
        selected1stCategory:null,
        selected2ndCategory:`{{ $portfolio->category_id }}`,
        infos:[],
        selectedInfos:JSON.parse(`{{ $portfolio->infos }}`),
        selectedOptions:JSON.parse(`{{ $portfolio->options }}`),
        formattedNumber:`{{ $portfolio->price_in_tl }}`,
formatNumber(event) {
    let input = event.target;
    let number = parseInt(input.value.replace(/\D/g, ''));
    if (!isNaN(number)) {
    let formatted = number.toLocaleString('tr-TR');
    input.value = formatted;

    }
    },
loadInfo(id){
    const self = this;
    url = `{{ route('category.info') }}/${id}`
    axios.get(url).then(res=>{
    self.infos = res.data.info
    }).catch(err=>{
    alert(err);
    console.log(err)
    })
    },
        loadChildren(id,level=1){
            const self = this
            let url;
            if (level == 1 ){
                self.selectedCategory = id;
                self.firstLevelChildren= [];
                self.secondLevelChildren= [];
                self.selected1stCategory = null;
                self.selected2ndCategory=null;

            }
            if (level != 1) {
                self.selected1stCategory = id
            }
            this.loadInfo(id)
                 url = `{{ route('category.children') }}/${id}`
            axios.get(url).then(res=>{
                if(level == 1){
                    self.firstLevelChildren = res.data.children
                    return
                }
                self.secondLevelChildren = res.data.children
            }).catch(err=>{
                console.log(err)
            })
        },
        towns:[],
        districts:[],
        numOfFeatures:0,
        portfolioDistrict:`{{ $portfolio->district_id }}`,
        portfolioTown:`{{ $portfolio->town_id }}`,
        loadTowns(url){
            this.districts=[]
            const self = this
            axios.get(url).then((res)=>{
                self.towns = res.data.towns

            }).catch((err)=>{
                console.log(err)
            })
    },
    loadDistricts(id){
        const url = `{{ route('towns.districts') }}/` + id
        const self = this
            axios.get(url).then((res)=>{
            self.districts = res.data.districts

            }).catch((err)=>{
            console.log(err)
            })
    }

    }">
        <div class="flex flex-wrap">
            <div class="w-full">
                <h1 class="text-xl">
                </h1>
            </div>
        </div>
        @include('admin.portfolios.update_form')
    </div>
</x-app-layout>
