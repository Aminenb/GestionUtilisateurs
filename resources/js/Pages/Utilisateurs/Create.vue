<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import { Head } from "@inertiajs/inertia-vue3";
const props = defineProps({
    utilisateurs: {
        type: Object,
        default: () => ({}),
    },
});


const form = useForm({
    'identifiant': '',
    'motdepasse': '',
    'confirmationmotdepasse': '',
    'nomcomplet': '',
    'role': '',
    'restrictionacces': '',
    'email': '',
    'telephone': '',
    'equipe': '',
    'modedetravail': ''

});

const submit = () => {
    form.post(route("utilisateurs.store"));
};
</script>

<template>
    <Head title="Ajouter utilisateur" />

    <BreezeAuthenticatedLayout>

        <p class="titleadduser">Création d'un compte utilisateur</p>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label for="Title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">L'identifiant</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.identifiant"
                                                name="identifiant"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder=""
                                            />
                                            <div
                                                v-if="form.errors.identifiant"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.identifiant }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="Slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Mot de passe</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.motdepasse"
                                                name="motdepasse"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder=""
                                            />
                                            <div
                                                v-if="form.errors.motdepasse"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.motdepasse }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="Slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Confirmation du mot de passe</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.confirmationmotdepasse"
                                                name="confirmationmotdepasse"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder=""
                                            />
                                            <div
                                                v-if="form.errors.confirmationmotdepasse"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.confirmationmotdepasse }}
                                            </div>
                                        </div>

                                        <div class="mb-6">
                                            <label
                                                for="Slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Nom Complet</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.nomcomplet"
                                                name="nomcomplet"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder=""
                                            />
                                            <div
                                                v-if="form.errors.nomcomplet"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.nomcomplet }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Role</label
                                            >
                                            <select class="form-control" name="role" v-model="form.role" id="roleselect">
                                                <option value="technicien">Technicien</option>
                                                <option value="chefequipe">Chef d'équipe</option>
                                                <option value="responsablemaintenance">Responsable Maintenance</option>
                                                <option value="responsableproduction">Responsable Production</option>
                                                <option value="manager">Manager</option>
                                                <option value="admin">Administrateur</option>
                                            </select>

                                            <div
                                                v-if="form.errors.role"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.role }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Restriction d'accès</label
                                            >
                                            <select class="form-control" name="restrictionacces" v-model="form.restrictionacces" id="restrictionselect">
                                                <option value="normal">Normal</option>
                                                <option value="modérateur">Modérateur</option>
                                                <option value="administrateur">Administrateur</option>
                                            </select>

                                            <div
                                                v-if="form.errors.restrictionacces"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.restrictionacces }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Email</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.email"
                                                name="email"
                                                id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            />

                                            <div
                                                v-if="form.errors.email"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.email }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Telephone</label
                                            >
                                            <input
                                                type="text"
                                                v-model="form.telephone"
                                                name="telephone"
                                                id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            />

                                            <div
                                                v-if="form.errors.telephone"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.telephone }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Equipe</label
                                            >
                                            <select class="form-control" name="equipe" v-model="form.equipe" id="equipeselect">
                                                <option value="equipe1">Equipe 1</option>
                                                <option value="equipe2">Equipe 2</option>
                                                <option value="equipe3">Equipe 3</option>
                                            </select>

                                            <div
                                                v-if="form.errors.equipe"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.equipe }}
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <label
                                                for="slug"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >Mode de travail</label
                                            >
                                        <div class="form-check-inline">
                                            <div class="form-check ">
                                                <input class="form-check-input radiotype" type="radio" value="Présentiel" name="modedetravail" v-model="form.modedetravail">
                                                <label class="form-check-label" for="inlineCheckbox1">Présentiel</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input radiotype" type="radio" value="A distance" name="modedetravail" v-model="form.modedetravail">
                                                <label class="form-check-label" for="inlineCheckbox2">A distance</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input radiotype" type="radio" value="Hybride" name="modedetravail" v-model="form.modedetravail">
                                                <label class="form-check-label" for="inlineCheckbox3">Hybride</label>
                                            </div>
                                        </div>


                                            <div
                                                v-if="form.errors.modedetravail"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.modedetravail }}
                                            </div>
                                        </div>
                                        <button
                                            type="submit"
                                            class="text-dark bg-gren submitedit focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                            :disabled="form.processing"
                                            :class="{ 'opacity-25': form.processing }"
                                        >
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </BreezeAuthenticatedLayout>
</template>
<style>
    #roleselect, #restrictionselect, #equipeselect{
        width:100%;
    }
    .form-check-inline{
        display: flex;
        margin-left: -12px;
    }
    .form-check{
        margin-left: 13px;
    }
    .form-check input{
        margin-top: -2.6px;
        margin-right: 3px;
    }
    .submitedit{
        background-color: #4d9eec;
        font-weight: bolder;
    }
    .titleadduser{
        font-size: 23px;
        font-weight: bolder;
        text-align: center;
        margin-top: 33px;
        margin-bottom: -35px;
    }
</style>
