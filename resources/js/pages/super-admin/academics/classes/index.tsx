import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, usePage } from '@inertiajs/react';
import { DataTable } from '@/components/data-table';
import { columns } from '@/pages/super-admin/academics/classes/components/columns';
import { AcademicClass } from '@/types/academic';
import { DataTableToolbar } from '@/pages/super-admin/academics/classes/components/data-table-toolbar';
import {
  ColumnDef,
  ColumnFiltersState,
  flexRender,
  getCoreRowModel,
  getFacetedRowModel,
  getFacetedUniqueValues,
  getFilteredRowModel,
  getPaginationRowModel,
  getSortedRowModel,
  SortingState,
  useReactTable,
  VisibilityState
} from '@tanstack/react-table';
import React from 'react';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Academics',
    href: '/'
  },
  {
    title: 'classes',
    href: '/academics/classes/'
  }
];

interface ClassesPageProps {
  classes: AcademicClass[];
}

export default function Classes() {

  const { props } = usePage<ClassesPageProps>();
  const data = props.classes;

  const [rowSelection, setRowSelection] = React.useState({});
  const [columnVisibility, setColumnVisibility] =
    React.useState<VisibilityState>({});
  const [columnFilters, setColumnFilters] = React.useState<ColumnFiltersState>(
    []
  );
  const [sorting, setSorting] = React.useState<SortingState>([]);

  const table = useReactTable({
    data,
    columns,
    state: {
      sorting,
      columnVisibility,
      rowSelection,
      columnFilters
    },
    initialState: {
      pagination: {
        pageSize: 25
      }
    },
    enableRowSelection: true,
    onRowSelectionChange: setRowSelection,
    onSortingChange: setSorting,
    onColumnFiltersChange: setColumnFilters,
    onColumnVisibilityChange: setColumnVisibility,
    getCoreRowModel: getCoreRowModel(),
    getFilteredRowModel: getFilteredRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    getSortedRowModel: getSortedRowModel(),
    getFacetedRowModel: getFacetedRowModel(),
    getFacetedUniqueValues: getFacetedUniqueValues()
  });

  return (
    <AppLayout breadcrumbs={breadcrumbs}>
      <Head title="Academic Classes" />
      <div className={'flex justify-between p-4 items-center'}>
        <div className="flex flex-col gap-0.5">
          <h2 className="text-2xl font-semibold tracking-tight">
            Class List
          </h2>
          <p className="text-muted-foreground text-sm">
            Here&apos;s a list of your tasks for this month.
          </p>
        </div>
      </div>
      <div className="flex h-full flex-1 flex-col gap-4 rounded-xl px-4 overflow-x-auto">
        <div className="flex flex-col gap-4">
          <DataTableToolbar table={table} />
          <DataTable
            columns={columns}
            data={data}
            onRowClick={(row) => console.log('Clicked:', row)}
            emptyText="No users found."
          />
        </div>
      </div>
    </AppLayout>
  );
}
