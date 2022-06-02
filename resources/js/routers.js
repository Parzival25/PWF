
//Componetes para CRUD usuarios
const Mostar = ()=> import('./components/user/Mostrar.vue');
const Crear = ()=> import('./components/user/Crear.vue');
const Editar = ()=> import('./components/user/Editar.vue');

export const routes = [
    {
        name:'mostrarUsers',
        path:'/users',
        component:Mostrar
    },
    {
        name:'crearUsers',
        path:'/crear',
        component:Crear
    },
    {
        name:'EditarUsers',
        path:'/editar/:id',
        component:Editar
    },
];