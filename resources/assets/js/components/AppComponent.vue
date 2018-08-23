<template>
    <div class="app-component">
        <table class="table">
            <thead>
                <tr>
                    <th>Task id</th>
                    <th>Task title</th>
                    <th>Priority</th>
                    <th>Action</th>
                </tr>
            </thead>
            <task-component v-for="task in tasks" :key="task.id" :task="task" @delete="remove"></task-component>
            <tbody>
                <tr>
                    <td>
                        <input v-model="task.title" type="text" id="task" class="form-control">
                    </td>
                    <td><select v-model="task.priority" name="" id="select" class="form-control">
                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>
                        
                        </select></td>
                    <td><button class="btn btn-primary" @click="store">Add</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import TaskComponent from "./TaskComponent";
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: function() {
    return {
      message: "Preved Medved",
      tasks: [],
      task: {title: '', priority: ''}
    };
  },
  components: {
    TaskComponent
  },
  methods: {
      store(){
          if (this.checkInputs()) {
              
              axios.post('api/tasks', this.task).then(({data})=>{
                  this.tasks.push(data)
                  this.task.title = ''

                })
          }
          
            
      },
      checkInputs(){
            if (this.task.title && this.task.priority) {
                return true
            }

      },
      remove(id) {
          console.log(id)

        //   axios.delete('api/tasks', id).then((response)=>{
        //       console.log(id)
        //   })
          axios.delete(`api/tasks/${id}`).then(()=>{
              let index = this.tasks.findIndex(task => task.id === id)
              this.tasks.splice(index, 1)
          })

      },
      getTask(){
          axios.get('api/tasks').then(({data})=>{
                data.forEach(task => {
                    this.tasks.push(task)                  
              });
          })
      }
      

  },
  created(){
      this.getTask()
  }
};
</script>
