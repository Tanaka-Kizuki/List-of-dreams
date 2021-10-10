<template>
    <div class="list">
            <ul>
                <li v-for="item in items" v-bind:key=item.id>
                    <p>{{item.name}}</p>
                    <input type="text" v-bind:value="item.created_at">
                    </li>
            </ul>
        </div>
</template>

<script>
export default {
    props :['items'],
    methods: {
        save() {
            this.show = !this.show
        }
    }

}
</script>