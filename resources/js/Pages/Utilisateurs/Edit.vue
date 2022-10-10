<script setup>
    import { Head } from "@inertiajs/inertia-vue3";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        utilisateur: {
            type: Object,
            default: () => ({}),
        },
    });

    const form = useForm({
        id: props.utilisateur.id,
        identifiant: props.utilisateur.identifiant,
        motdepasse: props.utilisateur.motdepasse,
        confirmationmotdepasse: props.utilisateur.confirmationmotdepasse,
        nomcomplet: props.utilisateur.nomcomplet,
        role: props.utilisateur.role,
        restrictionacces: props.utilisateur.restrictionacces,
        email: props.utilisateur.email,
        telephone: props.utilisateur.telephone,
        equipe: props.utilisateur.equipe,
        modedetravail: props.utilisateur.modedetravail,
    });


    const submit = () => {
        form.put(route("utilisateurs.update", props.utilisateur.id));
    };
    </script>

    <template>
        <Head title="Modification Utilisateur" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Utilisateur Edit
                </h2>
            </template>
            <p class="titleedituser">Modification d'un compte utilisateur</p>
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
                                                <input
                                                    type="text"
                                                    v-model="form.role"
                                                    name="role"
                                                    id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                />

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
                                                <input
                                                    type="text"
                                                    v-model="form.restrictionacces"
                                                    name="restrictionacces"
                                                    id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                />

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
                                                <input
                                                    type="text"
                                                    v-model="form.equipe"
                                                    name="equipe"
                                                    id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                />

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
                                                <input
                                                    type="text"
                                                    v-model="form.modedetravail"
                                                    name="modedetravail"
                                                    id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                />

                                                <div
                                                    v-if="form.errors.modedetravail"
                                                    class="text-sm text-red-600"
                                                >
                                                    {{ form.errors.modedetravail }}
                                                </div>
                                            </div>
                                            <button
                                                type="submit"
                                                class="text-dark submitedit bg-gren  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
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
    .submitedit{
        background-color: #4d9eec;
        font-weight: bolder;
    }
    .titleedituser{
        font-size: 23px;
        font-weight: bolder;
        text-align: center;
        margin-top: 33px;
        margin-bottom: -33px;
    }
</style>
