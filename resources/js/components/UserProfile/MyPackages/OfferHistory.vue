<template>
    <div class="offer-history">
        <table>
            <thead>
            <tr>
                <th>#ID</th>
                <th>{{ $t('თარიღი') }}</th>
                <th>{{ $t('თანხა') }}</th>
                <th>{{ $t('შემსრულებელი') }}</th>
                <th>{{ $t('სტატუსი') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="offer in data" :key="offer.id">
                <td>{{ offer.id }}</td>
                <td>{{ offer.date }}</td>
                <td>{{ offer.price }} $</td>
                <td>{{ offer.name }}</td>
                <td class="status">{{ offer.status }}
                    <img src="/images/arrow-right-lightblue.png" alt="">
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
export default {
    name: 'offerHistory',
    data() {
        return {
            data: [
                {
                    id: '#7245',
                    date: '12/01/2021',
                    price: '19.4',
                    name: 'ირაკლი კურტანიძე',
                    status: 'დასრულებული'
                },
                {
                    id: '#7245',
                    date: '12/01/2021',
                    price: '19.4',
                    name: 'ირაკლი კურტანიძე',
                    status: 'დასრულებული'
                },
                {
                    id: '#7245',
                    date: '12/01/2021',
                    price: '19.4',
                    name: 'ირაკლი კურტანიძე',
                    status: 'დასრულებული'
                },
                {
                    id: '#7245',
                    date: '12/01/2021',
                    price: '19.4',
                    name: 'ირაკლი კურტანიძე',
                    status: 'დასრულებული'
                },
                {
                    id: '#7245',
                    date: '12/01/2021',
                    price: '19.4',
                    name: 'ირაკლი კურტანიძე',
                    status: 'დასრულებული'
                }
            ]
        }
    }
}
</script>

<style scoped lang="scss">
.offer-history {
    table {
        width: 100%;
        margin: 0 0 30px;

        thead tr th {
            text-align: left;
            background: #DDEFF3;
            font-size: 14px;
            line-height: 14px;
            color: #000000;
            padding: 18px 0 18px 22px;

            &:first-child {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
            }

            &:last-child {
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
            }
        }

        tbody tr td {
            border-bottom: 1px solid #C5DDE2;
            font-weight: 500;
            font-size: 16px;
            line-height: 16px;
            color: #000000;
            padding: 26px 0 22px 22px;
            height: 64px;
        }

        .status {
            cursor: pointer;
            min-width: 200px;
            color: #1EAA56;
            display: flex;
            align-items: center;
            justify-content: space-between;

            img {
                height: 16px;
                margin: 0 10px;
            }
        }
    }
}
</style>
