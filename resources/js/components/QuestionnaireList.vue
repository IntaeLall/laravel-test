<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questionnaires</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="questionnaire in questionnaires" :key="questionnaire.id">
                                <router-link :to="`/questionnaire/${questionnaire.slug}`">
                                    {{questionnaire.name}}
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'QuestionnaireList',
        data: function() {
            return {
                questionnaires: [],
            }
        },
        async mounted() {
            const response = await axios.get(`/api/questionnaires`)
            this.questionnaires = response.data.data;
        },
    }
</script>
