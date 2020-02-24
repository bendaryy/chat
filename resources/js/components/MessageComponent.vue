<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            Chats
            <a href @click.prevent="close">
                <i class="fa fa-times float-right"></i>
            </a>
            <div class="dropdown float-right mr-4">
                <a
                    href=""
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i class="fa fa-ellipsis-h"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Block</a>
                    <a class="dropdown-item" href="#" @click.prevent="clear"
                        >Clear chat</a
                    >
                </div>
            </div>
        </div>
        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{ chat.message }}
            </p>
        </div>
        <form class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Write your message here"
                />
            </div>
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            chats: []
        };
    },
    methods: {
        send() {
            console.log("yehhh");
        },
        close() {
            this.$emit("close");
        },
        clear() {
            this.chats = [];
        }
    },
    created() {
        this.chats.push(
            { message: "hey" },
            { message: "how are you" },
            { message: "i am at the bottom" }
        );
    }
};
</script>
<style scoped>
.chat-box {
    height: 400px;
}
.card-body {
    overflow-y: scroll;
}
</style>
