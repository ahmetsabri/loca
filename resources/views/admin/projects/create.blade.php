<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('project') }}
        </h2>
    </x-slot>
    <div class="p-12" x-data="{
        towns:[],
        districts:[],
        numOfFeatures:3,
        numOfTransportation:3,
        siteFeatures:3,
        flatFeatures:3,
        numOfFlats:1,
        formattedNumber:null,
        images: [],
        handleFiles(event) {
            const files = event.target.files;
            const self = this;
            for (const file of files) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    axios.post(`{{ route('project.upload') }}`,{
                    images:e.target.result,
                    },{
                    headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
                    },
                    }).then(res=>{

                    self.images = res.data.images
                    }).catch(err=>{
                    alert('err')
                    console.log(err)
                    })
                }
                reader.readAsDataURL(file);
                new Promise(resolve => setTimeout(resolve, 2000));
            }
            event.target.value=''
        },
        deleteImage(id){
    const url = `{{ route('project.image.delete') }}/` + id
    const self = this
        axios.get(url).then((res)=>{
            self.images = res.data.images
        }).catch((err)=>{
        console.log(err)
        })
    },
    setAsMainImage(id){
    const url = `{{ route('project.image.set_main') }}/` + id
    const self = this
        axios.put(url).then((res)=>{
            self.images = res.data.images
        }).catch((err)=>{
        console.log(err)
        })
    },
        formatNumber(event) {
            let input = event.target;
            let number = parseInt(input.value.replace(/\D/g, ''));
            if (!isNaN(number)) {
                let formatted = number.toLocaleString('tr-TR');
                input.value = formatted;
            }
        },
        loadTowns(id){
            const url = `{{ route('province.towns') }}/` + id
            const self = this
            axios.get(url).then((res)=>{
                console.log(res.data.towns)
                self.towns = res.data.towns

            }).catch((err)=>{
                console.log(err)
            })
    },
    loadDistricts(id){
        const url = `{{ route('towns.districts') }}/` + id
        const self = this
            axios.get(url).then((res)=>{
            console.log(res.data.districts)
            self.districts = res.data.districts

            }).catch((err)=>{
            console.log(err)
            })
    }
    }">
        <div class="flex flex-wrap">
            <div class="w-full">
            </div>
        </div>
        @include('admin.projects.create_form')
    </div>
</x-app-layout>
