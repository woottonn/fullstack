<template>
    <div>
        <h1>VUE Componenty</h1>
        <router-view :key="$route.fullPath"></router-view>
    </div>
</template>
