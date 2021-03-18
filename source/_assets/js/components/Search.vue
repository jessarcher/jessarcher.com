<template>
    <div class="flex flex-1 justify-end items-center text-right px-4">
        <div
            class="absolute md:relative w-full justify-end left-0 top-0 z-30 mt-6 md:mt-0 px-6 md:px-0 bg-gray-50 md:bg-transparent"
            :class="{'hidden md:flex': ! searching}"
        >
            <label for="search" class="hidden">Search</label>

            <input
                id="search"
                v-model="query"
                ref="search"
                class="
                    transition-fast
                    relative
                    block
                    h-10
                    w-full
                    md:w-1/2
                    md:focus:w-full
                    border
                    border-gray-200
                    bg-gray-100
                    text-gray-200
                    hover:bg-white
                    focus:bg-white
                    focus:text-gray-600
                    outline-none
                    cursor-pointer
                    px-4
                    pb-0
                "
                :class="{ 'transition-border': query }"
                autocomplete="off"
                name="search"
                placeholder="Search"
                type="text"
                @keyup.esc="reset"
                @blur="reset"
            >

            <button
                v-if="query || searching"
                class="absolute top-0 right-0 h-10 font-light text-3xl text-gray-500 hover:text-gray-900 focus:outline-none -mt-px pr-10 md:pr-3"
                @click="reset"
            >&times;</button>

            <transition name="fade">
                <div v-if="query" class="absolute left-0 right-0 md:inset-auto w-full text-left mb-4 md:mt-10">
                    <div class="flex flex-col bg-white rounded-b-lg shadow-lg mx-6 md:mx-0">
                        <a
                            v-for="(result, index) in results"
                            class="hover:bg-gray-50 border-t border-gray-200 text-xl cursor-pointer p-4 text-gray-800"
                            :class="{ 'rounded-b-lg border-b-0' : (index === results.length - 1) }"
                            :href="result.link"
                            :title="result.title"
                            :key="result.link"
                            @mousedown.prevent
                        >
                            {{ result.title }}

                            <span class="block font-normal text-gray-500 text-sm my-1" v-html="result.snippet"></span>
                        </a>

                        <div
                            v-if="! results.length"
                            class="w-full hover:bg-gray-50 border-t border-gray-200 rounded-b-lg shadow cursor-pointer p-4"
                        >
                            <p class="my-0">No results for <strong>{{ query }}</strong></p>
                        </div>
                    </div>
                </div>
            </transition>
        </div>

        <button
            title="Start searching"
            type="button"
            class="
                flex
                md:hidden
                border
                border-gray-200
                bg-gray-100
                hover:bg-white
                justify-center
                items-center
                rounded-full
                focus:outline-none
                h-10
                px-3
            "
            @click.prevent="showInput"
        >
            <img src="/assets/images/magnifying-glass.svg" alt="search icon" class="h-4 w-4 max-w-none">
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fuse: null,
            searching: false,
            query: '',
        };
    },
    computed: {
        results() {
            return this.query ? this.fuse.search(this.query) : [];
        },
    },
    methods: {
        showInput() {
            this.searching = true;
            this.$nextTick(() => {
                this.$refs.search.focus();
            })
        },
        reset() {
            this.query = '';
            this.searching = false;
        },
    },
    created() {
        axios('/index.json').then(response => {
            this.fuse = new fuse(response.data, {
                minMatchCharLength: 6,
                keys: ['title', 'snippet', 'categories'],
            });
        });
    },
};
</script>

<style>
input[name='search'] {
    background-image: url('/assets/images/magnifying-glass.svg');
    background-position: 0.8em;
    background-repeat: no-repeat;
    border-radius: 25px;
    text-indent: 1.2em;
}

input[name='search'].transition-border {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem;
}

.fade-enter-active {
    transition: opacity .5s;
}

.fade-leave-active {
    transition: opacity 0s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
