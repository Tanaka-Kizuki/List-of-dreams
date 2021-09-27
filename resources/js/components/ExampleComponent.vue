<template>
    <div class="add">
        <form action="/home" method="post">
        @csrf
            <h2>やりたいこと</h2>
            <input type="text" name="do">
            <h2>最寄り駅</h2>
            <input type="text" name="train">
            <h2>タグ</h2>
            <input type="radio" value="やりたいこと" name="tag" checked="true">やりたいこと
            <input type="radio" value="カフェ" name="tag">カフェ
            <input type="submit" value="保存">
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
