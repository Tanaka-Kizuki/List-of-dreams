<template>
    <div class="add">
        <div class="add_form"  v-if="show">
            <form action="/add" method="get">
                <h2>やりたいこと</h2>
                <input type="text" name="name">
                <h2>最寄り駅</h2>
                <input type="text" name="train">
                <h2>タグ</h2>
                <input type="radio" value="やりたいこと" name="tag" checked="true">やりたいこと
                <input type="radio" value="カフェ" name="tag">カフェ
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="create">
                <img class="button" :src="'image/プラスマークアイコン 6.svg'" alt="新規作成" @click="save">
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: false,
            }
        },
        methods: {
            save() {
                this.show = !this.show
            }
        }
    }
</script>

<style>
    .add {
        text-align: center;
        width: 100%;
        height: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
    }
    .create {
        text-align: right;
        position: absolute;
        bottom: 30px;
        right: 20px;
    }
    .button {
        width: 50px;
        height: 50px;
    }
</style>