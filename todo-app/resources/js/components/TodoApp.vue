<template>
    <div>
        <h1>To-do List</h1>
        <form @submit.prevent="createTask">
            <input v-model="newTask" type="text" placeholder="New Task" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            <li v-for="task in tasks" :key="task.id">
                <input type="checkbox" v-model="task.completed" @change="updateTask(task)">
                <span :class="{ 'completed': task.completed }">{{ task.title }}</span>
                <button @click="deleteTask(task.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            newTask: '',
            tasks: []
        };
    },
    mounted() {
        this.getTasks();
    },
    methods: {
        getTasks() {
            axios.get('/api/tasks').then(response => {
                this.tasks = response.data;
            });
        },
        createTask() {
            axios.post('/api/tasks', { title: this.newTask }).then(response => {
                this.tasks.unshift(response.data);
                this.newTask = '';
            });
        },
        updateTask(task) {
            axios.put(`/api/tasks/${task.id}`, task).then(response => {
                this.getTasks();
            });
        },
        deleteTask(id) {
            axios.delete(`/api/tasks/${id}`).then(response => {
                this.getTasks();
            });
        }
    }
};
</script>

<style scoped>
.completed {
    text-decoration: line-through;
}
</style>
