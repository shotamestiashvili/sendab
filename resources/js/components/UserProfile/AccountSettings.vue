<template>
    <DefaultGrid :data="data"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";
import ResetPassword from "./AccountSettings/ResetPassword";
import EmailSubscription from "./AccountSettings/EmailSubscription";
import DeleteAccount from "./AccountSettings/DeleteAccount";

export default {
    name: 'accountSettings',
    components: {
        DefaultGrid
    },
    data() {
        return {
            data: [
                {
                    name: 'პაროლის შეცვლა',
                    key: '1',
                    component: ResetPassword,
                    props: {}
                },
                {
                    name: 'ელ. ფოსტის შეტყობინებები',
                    key: '2',
                    component: EmailSubscription,
                    props: {}
                },
                {
                    name: 'ანგარიშის დახურვა',
                    key: '3',
                    component: DeleteAccount,
                    props: {}
                }
            ]
        }
    }
}
</script>
