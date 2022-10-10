


<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3'


const props = defineProps({
    utilisateurs: {
        type: Object,
        default: () => ({}),
    },

});
const filter = () => {
    this.props.utilisateurs = utilisateurs.filter(function(el) {
        return el.role == 'admin'
    });
    console.log(newArray);
};
const form2 = useForm({
    'search': '',
});
const form = useForm();

function destroy(id) {
    if (confirm("Etes-vous sur de vouloir supprimer ce compte ?")) {
        form.delete(route('utilisateurs.destroy', id));
    }
}
</script>

<template>
    <Head title="Utilisateurs" />


    <BreezeAuthenticatedLayout>
        <template #header>
                                    <h2 class="text-xl font-semibold leading-tight text-gray-800">
                                        Utilisateurs Index
                                    </h2>
</template>

            <div class="py-8">
                <div class="mx-auto max-w-7xl ">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class=" bg-white border-b border-gray-200">
                           <div class="mb-3 sm:px-2 lg:px-4">
                                <Link :href="route('utilisateurs.create')">
                                    <BreezeButton class="addbtn">&#10010; Utilisateur</BreezeButton></Link
                                >
                            <div class="selectbtn">
                                <i class="fa fa-filter" style="color:white" id="filtericon"></i>
                                <select name="role" class="selectindex" v-model="form2.search">
                                <option value="" selected hidden >Filter</option>
                                <option value="">Tous</option>
                                <option value="technicien">Technicien</option>
                                <option value="chefequipe">Chef d'équipe</option>
                                <option value="responsablemaintenance">Responsable Maintenance</option>
                                <option value="responsableproduction">Responsable Production</option>
                                <option value="manager">Manager</option>
                                <option value="admin">Administrateur</option>
                            </select>
                        </div>
                            <p class="nbrusers">{{ utilisateurs.length }} utilisateurs</p>
                            </div>
                             <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg"
                            >
                                <table
                                class="table table-striped table-hover"
                                >
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                    >
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Nom
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Role
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Restriction
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Téléphone
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Equipe
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Mode
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Edit
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody v-for="utilisateur in utilisateurs"
                                    :key="utilisateur.id">
                                        <tr v-if="utilisateur.role==form2.search || form2.search=='' ">
                                            <td>{{ utilisateur.identifiant }}</td>
                                            <td>{{ utilisateur.nomcomplet }}</td>
                                            <td>{{ utilisateur.role }}</td>
                                            <td>{{ utilisateur.restrictionacces }}</td>
                                            <td>{{ utilisateur.email }}</td>
                                            <td>{{ utilisateur.telephone }}</td>
                                            <td>{{ utilisateur.equipe }}</td>
                                            <td>{{ utilisateur.modedetravail }}</td>
                                            <td class="py-4">
                                                <Link
                                                    :href="
                                                        route(
                                                            'utilisateurs.edit',
                                                            utilisateur.id
                                                        )
                                                    "
                                                 ><img src="./assets/images/gear.png" class="iconscolumn"  style="width: 24px; height: 24px; padding: 1px;"/></Link
                                                >
                                            </td>
                                            <td class="py-4">
                                                <BreezeButton
                                                    class="bg-red-700"
                                                    @click="destroy(utilisateur.id)"
                                                >
                                                    <img src="./assets/images/remove.png" class="icondcolumn" style="width: 24px; height: 24px; padding: 1px;"/>
                                                </BreezeButton>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </BreezeAuthenticatedLayout>
    </template>

<style>
table {
    width: 100%;
    margin-top: 6px;
}
th{
    font-weight: bolder;
    font-size: 13.4px;
}
td {
    padding: 0 9px 0 9px;
    font-size: 14.2px;
    text-align: center;
}

.icondcolumn {
    margin-left: 18px;
}

.iconscolumn {
    margin-left: 12px;
}

.selectindex {
    width: 200px;
    padding: 0px 12px;
    background-color: #4d9eec;
    border-color: #4d9eec;
    color:white
}

.selectindex,
.selectindex:focus,
.selectindex:active {
    outline: none;
    border: 0px;
}

#filtericon {
    margin-left: 12px;
}
.addbtn{
    background-color:#4d9eec;
    padding : 9px 12px 4px 12px;
    color:white;
}
.selectbtn{
    display: inline;
    background-color:#4d9eec;
    padding : 9px 2px 4px 2px;
    width: 90px;
    height: 39px;
    margin-left: 12px;
}
option{
    background-color: white;
    color:black;
}
.nbrusers{
    font-weight: 750;
    color: black;
    opacity: 80%;
    font-size:14.5px;
    display:inline;
    margin-left: 7px;
    border-bottom: 3.6px solid #4d9eec;

}
</style>
