import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);


function setComponent(path_file) {
    const route_path = "./components/backend/pages/" + path_file + "Component.vue";
    return import ("" + route_path);
}
const routes = [
    { path: "*", component: () => setComponent("error/404") },
    { path: "/unauthorized/user", component: () => setComponent("error/401"), name: "unauthorized" },
    {
        path: "/",
        redirect: { path: '/dashboard' }
    },
    {
        path: "/dashboard",
        component: () => setComponent("dashboard/Home"),
        name: "Dashboard",
        meta: { permissions: "dashboard-view" }
    },
    // {
    //     path: "/users",
    //     component: () => setComponent("user/Users"),
    //     name: "Users",
    //     meta: { permissions: "users-view" }
    // },
    // {
    //     path: "/container/receives",
    //     component: () => setComponent("receive/Receives"),
    //     name: "Users",
    //     meta: { permissions: "receives-view" }
    // },



];

const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active" // short for `
});

router.beforeEach((to, from, next) => {
    console.log(to.meta.permissions)
    if (to.meta.permissions) {
        if (permissions.indexOf(to.meta.permissions) !== -1) {
            console.log("not auth");
            next()

        } else {
            next({ path: '/unauthorized/user' })
            console.log(" auth");
        }
    }

    next()

})
export default router;