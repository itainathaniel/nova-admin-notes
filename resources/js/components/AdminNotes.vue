<template>
    <div>
        <heading class="mb-6">Notes</heading>

        <card class="mb-6 py-3 px-6">
            <div class="flex border-b border-40">
                <div class="w-full px-8 py-6 h-full">
                    <textarea v-model="notes" class="w-full h-screen form-control form-input form-input-bordered py-3 min-h-textarea"></textarea>
                </div>
            </div>
            <div class="bg-30 flex px-8 py-4">
                <button class="btn btn-default btn-primary" @click="saveNotes">
                    Save
                </button>
            </div>
        </card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notes: Nova.config.notes,
        }
    },
    mounted() {
        this.getNotes()
    },
    methods: {
        getNotes() {
            Nova.request()
                .get('/nova-vendor/itainathaniel/admin-notes/notes')
                .then(response => {
                    this.notes = response.data.notes
                });
        },
        saveNotes() {
            Nova.request()
                .post('/nova-vendor/itainathaniel/admin-notes/store', {
                    notes: this.notes
                })
                .then(response => {
                    this.$toasted.show(response.data.message, { type: 'success' })
                })
                .catch(response => {
                    this.$toasted.show('Something went wrong', {type: 'error'})
                });
        }
    }
}
</script>
