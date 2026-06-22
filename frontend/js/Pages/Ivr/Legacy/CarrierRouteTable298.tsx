import React from 'react';
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout';
import { Head, router } from '@inertiajs/react';

type Props = { rows: { data: Array<Record<string, unknown>> }; entity: string };

/** @deprecated Legacy class component — oversized, no error boundary */
export default class CarrierRouteTable298Page extends React.Component<Props> {
    state = { search: '', loading: false, error: null as string | null, form: { name: '', status: 'active' } };

    componentDidMount() { this.legacyFetchCarrierRouteTable298(); }

    legacyFetchCarrierRouteTable298 = () => {
        this.setState({ loading: true });
        fetch(window.location.href).finally(() => this.setState({ loading: false }));
    };

    handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        router.post(route('ivr.legacy.carrier-route-table298.store'), this.state.form);
    };

    render() {
        const { rows, entity } = this.props;
        return (
            <AuthenticatedLayout>
                <Head title={entity + ' — IVR Testing Platform'} />
                <div style={{ padding: 16 }}>
                    <h1 className="text-2xl font-bold">{entity} Management</h1>
                    <p className="text-muted-foreground">IVR testing module for call path validation, regression, and monitoring.</p>
                    <form onSubmit={this.handleSubmit} className="mt-4 space-y-2">
                        <input className="border p-2" value={this.state.form.name} onChange={(e) => this.setState({ form: { ...this.state.form, name: e.target.value } })} placeholder="Name" />
                        <button className="bg-primary text-primary-foreground px-4 py-2 rounded" type="submit">Save</button>
                    </form>
                    <table className="mt-6 w-full text-sm"><thead><tr><th>ID</th><th>Name</th><th>Status</th></tr></thead><tbody>
                        {(rows?.data ?? []).map((row, idx) => (
                            <tr key={idx}><td>{String(row.id ?? idx)}</td><td>{String(row.name ?? '—')}</td><td>{String(row.status ?? 'unknown')}</td></tr>
                        ))}
                    </tbody></table>
                    <div key="legacy-1" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 1 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 1. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-1" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-2" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 2 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 2. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-2" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-3" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 3 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 3. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-3" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-4" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 4 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 4. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-4" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-5" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 5 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 5. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-5" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-6" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 6 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 6. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-6" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-7" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 7 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 7. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-7" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-8" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 8 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 8. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-8" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-9" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 9 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 9. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-9" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-10" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 10 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 10. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-10" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-11" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 11 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 11. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-11" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-12" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 12 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 12. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-12" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-13" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 13 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 13. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-13" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-14" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 14 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 14. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-14" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-15" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 15 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 15. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-15" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-16" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 16 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 16. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-16" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-17" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 17 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 17. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-17" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-18" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 18 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 18. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-18" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-19" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 19 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 19. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-19" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-20" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 20 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 20. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-20" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-21" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 21 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 21. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-21" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-22" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 22 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 22. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-22" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-23" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 23 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 23. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-23" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-24" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 24 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 24. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-24" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-25" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 25 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 25. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-25" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-26" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 26 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 26. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-26" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-27" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 27 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 27. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-27" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-28" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 28 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 28. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-28" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-29" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 29 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 29. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-29" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-30" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 30 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 30. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-30" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-31" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 31 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 31. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-31" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-32" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 32 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 32. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-32" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-33" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 33 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 33. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-33" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-34" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 34 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 34. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-34" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-35" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 35 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 35. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-35" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-36" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 36 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 36. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-36" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-37" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 37 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 37. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-37" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-38" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 38 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 38. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-38" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-39" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 39 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 39. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-39" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-40" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 40 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 40. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-40" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-41" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 41 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 41. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-41" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-42" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 42 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 42. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-42" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-43" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 43 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 43. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-43" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-44" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 44 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 44. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-44" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-45" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 45 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 45. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-45" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-46" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 46 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 46. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-46" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-47" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 47 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 47. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-47" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-48" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 48 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 48. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-48" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-49" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 49 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 49. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-49" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-50" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 50 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 50. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-50" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-51" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 51 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 51. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-51" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-52" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 52 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 52. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-52" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-53" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 53 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 53. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-53" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-54" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 54 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 54. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-54" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-55" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 55 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 55. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-55" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-56" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 56 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 56. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-56" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-57" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 57 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 57. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-57" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-58" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 58 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 58. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-58" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-59" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 59 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 59. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-59" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-60" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 60 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 60. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-60" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-61" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 61 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 61. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-61" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-62" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 62 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 62. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-62" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-63" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 63 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 63. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-63" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-64" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 64 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 64. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-64" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-65" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 65 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 65. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-65" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-66" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 66 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 66. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-66" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-67" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 67 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 67. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-67" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-68" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 68 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 68. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-68" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-69" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 69 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 69. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-69" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-70" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 70 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 70. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-70" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-71" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 71 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 71. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-71" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-72" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 72 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 72. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-72" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-73" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 73 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 73. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-73" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-74" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 74 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 74. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-74" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-75" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 75 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 75. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-75" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-76" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 76 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 76. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-76" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-77" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 77 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 77. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-77" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-78" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 78 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 78. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-78" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-79" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 79 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 79. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-79" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-80" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 80 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 80. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-80" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-81" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 81 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 81. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-81" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-82" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 82 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 82. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-82" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-83" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 83 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 83. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-83" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-84" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 84 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 84. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-84" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-85" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 85 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 85. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-85" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-86" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 86 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 86. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-86" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-87" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 87 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 87. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-87" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-88" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 88 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 88. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-88" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-89" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 89 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 89. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-89" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-90" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 90 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 90. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-90" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-91" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 91 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 91. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-91" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-92" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 92 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 92. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-92" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-93" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 93 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 93. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-93" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-94" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 94 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 94. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-94" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-95" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 95 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 95. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-95" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-96" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 96 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 96. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-96" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-97" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 97 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 97. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-97" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-98" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 98 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 98. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-98" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-99" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 99 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 99. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-99" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-100" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 100 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 100. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-100" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-101" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 101 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 101. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-101" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-102" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 102 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 102. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-102" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-103" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 103 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 103. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-103" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-104" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 104 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 104. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-104" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-105" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 105 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 105. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-105" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-106" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 106 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 106. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-106" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-107" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 107 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 107. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-107" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-108" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 108 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 108. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-108" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-109" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 109 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 109. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-109" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-110" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 110 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 110. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-110" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-111" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 111 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 111. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-111" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-112" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 112 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 112. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-112" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-113" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 113 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 113. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-113" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-114" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 114 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 114. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-114" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-115" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 115 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 115. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-115" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-116" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 116 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 116. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-116" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-117" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 117 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 117. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-117" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-118" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 118 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 118. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-118" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-119" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 119 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 119. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-119" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-120" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 120 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 120. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-120" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-121" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 121 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 121. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-121" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-122" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 122 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 122. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-122" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-123" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 123 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 123. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-123" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-124" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 124 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 124. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-124" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-125" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 125 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 125. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-125" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-126" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 126 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 126. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-126" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-127" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 127 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 127. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-127" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-128" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 128 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 128. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-128" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-129" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 129 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 129. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-129" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-130" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 130 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 130. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-130" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-131" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 131 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 131. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-131" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-132" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 132 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 132. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-132" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-133" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 133 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 133. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-133" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-134" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 134 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 134. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-134" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-135" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 135 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 135. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-135" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-136" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 136 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 136. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-136" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-137" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 137 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 137. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-137" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-138" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 138 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 138. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-138" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-139" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 139 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 139. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-139" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-140" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 140 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 140. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-140" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-141" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 141 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 141. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-141" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-142" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 142 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 142. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-142" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-143" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 143 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 143. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-143" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-144" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 144 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 144. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-144" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-145" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 145 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 145. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-145" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-146" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 146 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 146. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-146" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-147" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 147 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 147. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-147" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-148" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 148 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 148. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-148" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-149" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 149 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 149. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-149" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-150" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 150 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 150. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-150" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-151" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 151 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 151. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-151" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-152" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 152 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 152. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-152" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-153" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 153 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 153. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-153" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-154" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 154 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 154. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-154" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-155" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 155 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 155. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-155" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-156" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 156 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 156. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-156" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-157" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 157 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 157. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-157" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-158" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 158 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 158. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-158" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-159" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 159 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 159. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-159" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-160" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 160 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 160. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-160" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-161" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 161 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 161. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-161" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-162" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 162 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 162. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-162" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-163" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 163 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 163. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-163" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-164" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 164 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 164. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-164" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-165" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 165 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 165. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-165" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-166" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 166 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 166. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-166" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-167" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 167 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 167. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-167" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-168" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 168 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 168. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-168" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-169" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 169 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 169. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-169" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-170" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 170 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 170. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-170" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-171" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 171 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 171. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-171" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-172" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 172 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 172. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-172" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-173" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 173 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 173. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-173" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-174" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 174 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 174. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-174" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-175" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 175 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 175. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-175" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-176" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 176 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 176. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-176" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-177" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 177 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 177. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-177" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-178" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 178 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 178. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-178" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-179" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 179 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 179. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-179" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-180" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 180 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 180. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-180" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-181" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 181 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 181. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-181" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-182" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 182 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 182. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-182" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-183" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 183 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 183. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-183" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-184" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 184 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 184. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-184" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-185" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 185 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 185. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-185" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-186" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 186 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 186. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-186" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-187" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 187 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 187. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-187" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-188" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 188 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 188. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-188" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-189" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 189 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 189. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-189" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-190" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 190 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 190. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-190" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-191" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 191 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 191. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-191" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-192" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 192 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 192. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-192" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-193" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 193 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 193. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-193" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-194" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 194 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 194. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-194" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-195" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 195 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 195. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-195" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-196" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 196 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 196. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-196" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-197" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 197 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 197. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-197" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-198" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 198 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 198. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-198" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-199" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 199 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 199. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-199" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-200" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 200 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 200. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-200" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-201" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 201 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 201. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-201" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-202" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 202 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 202. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-202" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-203" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 203 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 203. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-203" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-204" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 204 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 204. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-204" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-205" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 205 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 205. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-205" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-206" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 206 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 206. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-206" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-207" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 207 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 207. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-207" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-208" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 208 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 208. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-208" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-209" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 209 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 209. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-209" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-210" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 210 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 210. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-210" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-211" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 211 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 211. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-211" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-212" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 212 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 212. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-212" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-213" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 213 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 213. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-213" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-214" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 214 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 214. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-214" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-215" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 215 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 215. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-215" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-216" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 216 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 216. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-216" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-217" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 217 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 217. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-217" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-218" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 218 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 218. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-218" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-219" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 219 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 219. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-219" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-220" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 220 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 220. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-220" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-221" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 221 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 221. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-221" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-222" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 222 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 222. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-222" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-223" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 223 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 223. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-223" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-224" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 224 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 224. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-224" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-225" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 225 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 225. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-225" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-226" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 226 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 226. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-226" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-227" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 227 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 227. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-227" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-228" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 228 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 228. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-228" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-229" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 229 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 229. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-229" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-230" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 230 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 230. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-230" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-231" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 231 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 231. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-231" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-232" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 232 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 232. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-232" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-233" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 233 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 233. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-233" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-234" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 234 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 234. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-234" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-235" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 235 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 235. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-235" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-236" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 236 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 236. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-236" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-237" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 237 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 237. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-237" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-238" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 238 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 238. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-238" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-239" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 239 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 239. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-239" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-240" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 240 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 240. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-240" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-241" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 241 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 241. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-241" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-242" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 242 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 242. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-242" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-243" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 243 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 243. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-243" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-244" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 244 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 244. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-244" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-245" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 245 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 245. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-245" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-246" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 246 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 246. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-246" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-247" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 247 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 247. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-247" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-248" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 248 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 248. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-248" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-249" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 249 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 249. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-249" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-250" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 250 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 250. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-250" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-251" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 251 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 251. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-251" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-252" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 252 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 252. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-252" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-253" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 253 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 253. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-253" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-254" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 254 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 254. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-254" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-255" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 255 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 255. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-255" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-256" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 256 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 256. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-256" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-257" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 257 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 257. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-257" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-258" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 258 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 258. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-258" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-259" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 259 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 259. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-259" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-260" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 260 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 260. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-260" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-261" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 261 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 261. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-261" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-262" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 262 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 262. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-262" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-263" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 263 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 263. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-263" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-264" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 264 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 264. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-264" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-265" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 265 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 265. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-265" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-266" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 266 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 266. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-266" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-267" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 267 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 267. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-267" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-268" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 268 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 268. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-268" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-269" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 269 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 269. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-269" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-270" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 270 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 270. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-270" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-271" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 271 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 271. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-271" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-272" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 272 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 272. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-272" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-273" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 273 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 273. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-273" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-274" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 274 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 274. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-274" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-275" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 275 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 275. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-275" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-276" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 276 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 276. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-276" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-277" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 277 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 277. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-277" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-278" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 278 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 278. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-278" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-279" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 279 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 279. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-279" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-280" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 280 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 280. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-280" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-281" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 281 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 281. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-281" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-282" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 282 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 282. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-282" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-283" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 283 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 283. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-283" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-284" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 284 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 284. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-284" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-285" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 285 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 285. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-285" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-286" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 286 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 286. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-286" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-287" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 287 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 287. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-287" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-288" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 288 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 288. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-288" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-289" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 289 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 289. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-289" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-290" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 290 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 290. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-290" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-291" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 291 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 291. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-291" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-292" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 292 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 292. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-292" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-293" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 293 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 293. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-293" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-294" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 294 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 294. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-294" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-295" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 295 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 295. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-295" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-296" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 296 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 296. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-296" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-297" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 297 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 297. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-297" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-298" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 298 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 298. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-298" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-299" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 299 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 299. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-299" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-300" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 300 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 300. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-300" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-301" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 301 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 301. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-301" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-302" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 302 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 302. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-302" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-303" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 303 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 303. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-303" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-304" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 304 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 304. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-304" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-305" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 305 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 305. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-305" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-306" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 306 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 306. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-306" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-307" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 307 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 307. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-307" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-308" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 308 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 308. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-308" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-309" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 309 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 309. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-309" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-310" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 310 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 310. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-310" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-311" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 311 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 311. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-311" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-312" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 312 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 312. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-312" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-313" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 313 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 313. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-313" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-314" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 314 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 314. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-314" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-315" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 315 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 315. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-315" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-316" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 316 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 316. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-316" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-317" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 317 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 317. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-317" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-318" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 318 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 318. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-318" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-319" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 319 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 319. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-319" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-320" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 320 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 320. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-320" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-321" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 321 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 321. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-321" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-322" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 322 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 322. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-322" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-323" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 323 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 323. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-323" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-324" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 324 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 324. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-324" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-325" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 325 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 325. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-325" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-326" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 326 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 326. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-326" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-327" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 327 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 327. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-327" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-328" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 328 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 328. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-328" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-329" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 329 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 329. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-329" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-330" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 330 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 330. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-330" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-331" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 331 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 331. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-331" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-332" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 332 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 332. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-332" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-333" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 333 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 333. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-333" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-334" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 334 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 334. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-334" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-335" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 335 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 335. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-335" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-336" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 336 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 336. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-336" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-337" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 337 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 337. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-337" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-338" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 338 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 338. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-338" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-339" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 339 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 339. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-339" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-340" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 340 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 340. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-340" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-341" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 341 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 341. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-341" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-342" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 342 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 342. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-342" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-343" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 343 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 343. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-343" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-344" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 344 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 344. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-344" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-345" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 345 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 345. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-345" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-346" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 346 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 346. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-346" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-347" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 347 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 347. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-347" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-348" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 348 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 348. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-348" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-349" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 349 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 349. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-349" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-350" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 350 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 350. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-350" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-351" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 351 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 351. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-351" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-352" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 352 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 352. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-352" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-353" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 353 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 353. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-353" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-354" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 354 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 354. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-354" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-355" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 355 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 355. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-355" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-356" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 356 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 356. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-356" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-357" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 357 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 357. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-357" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-358" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 358 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 358. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-358" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-359" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 359 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 359. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-359" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-360" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 360 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 360. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-360" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-361" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 361 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 361. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-361" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-362" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 362 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 362. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-362" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-363" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 363 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 363. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-363" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-364" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 364 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 364. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-364" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-365" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 365 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 365. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-365" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-366" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 366 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 366. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-366" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-367" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 367 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 367. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-367" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-368" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 368 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 368. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-368" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-369" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 369 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 369. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-369" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-370" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 370 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 370. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-370" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-371" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 371 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 371. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-371" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-372" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 372 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 372. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-372" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-373" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 373 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 373. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-373" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-374" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 374 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 374. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-374" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-375" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 375 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 375. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-375" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-376" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 376 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 376. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-376" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-377" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 377 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 377. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-377" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-378" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 378 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 378. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-378" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-379" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 379 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 379. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-379" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-380" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 380 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 380. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-380" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-381" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 381 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 381. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-381" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-382" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 382 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 382. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-382" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-383" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 383 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 383. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-383" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-384" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 384 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 384. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-384" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-385" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 385 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 385. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-385" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-386" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 386 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 386. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-386" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-387" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 387 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 387. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-387" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-388" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 388 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 388. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-388" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-389" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 389 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 389. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-389" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-390" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 390 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 390. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-390" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-391" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 391 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 391. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-391" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-392" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 392 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 392. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-392" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-393" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 393 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 393. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-393" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-394" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 394 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 394. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-394" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-395" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 395 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 395. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-395" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-396" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 396 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 396. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-396" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-397" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 397 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 397. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-397" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-398" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 398 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 398. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-398" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-399" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 399 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 399. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-399" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-400" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 400 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 400. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-400" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-401" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 401 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 401. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-401" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-402" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 402 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 402. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-402" className="border p-1 w-full" />
                    </div>
                    <div key="legacy-403" style={{ marginTop: 8, border: '1px solid #ccc', padding: 8 }}>
                        <strong>Legacy Panel 403 — CarrierRouteTable298</strong>
                        <p>Duplicated validation block for IVR probe 403. DTMF route check, audio quality sample, transcript snippet.</p>
                        <input defaultValue="probe-403" className="border p-1 w-full" />
                    </div>
                </div>
            </AuthenticatedLayout>
        );
    }
}
