<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questionnaire {{ questionnaire.name }}</div>

                    <div class="card-body">
                        <form>
                            <div 
                                v-for="question in questionnaire.questions"
                                :key="question.id" 
                                class="form-group"
                            >
                                <label>{{ question.question }}</label>
                                <input
                                    v-model="responses[question.question]"
                                    type="text" 
                                    class="form-control"
                                    placeholder="Enter response"
                                >
                            </div>
                            <button
                                @click.prevent="submitResponse(questionnaire.id)" 
                                type="submit" 
                                class="btn btn-primary"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'Questionnaire',
        data: function() {
            return {
                questionnaire: {},
                responses: {}
            }
        },
        async mounted() {
            const slug = this.$route.params.slug
            const response = await axios.get(`/api/questionnaires/${slug}`)
            this.questionnaire = response.data.data;
        },
        methods : {
            submitResponse(id) {
                console.log(id)
            }
        }
    }
</script>
