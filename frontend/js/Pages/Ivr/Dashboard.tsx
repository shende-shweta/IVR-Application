import { IvrDashboardOverview, type DashboardData } from '@/components/ivr-dashboard-overview';
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

type Props = {
    dashboard: DashboardData;
};

export default function IvrDashboard({ dashboard }: Props) {
    return (
        <AuthenticatedLayout>
            <Head title="IVR Platform" />
            <div className="flex flex-1 flex-col gap-4 p-4 sm:p-6">
                <IvrDashboardOverview
                    dashboard={dashboard}
                    title="IVR Platform Overview"
                />
            </div>
        </AuthenticatedLayout>
    );
}
