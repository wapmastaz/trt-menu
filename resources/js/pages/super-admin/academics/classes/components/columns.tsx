"use client"

import { ColumnDef } from "@tanstack/react-table"
import { AcademicClass } from '@/types/academic';
import { DataTableRowActions } from '@/pages/super-admin/academics/classes/components/data-table-row-action';

export const columns: ColumnDef<AcademicClass>[] = [
  {
    accessorKey: "id",
    header: "ID",
  },
  {
    accessorKey: "name",
    header: "Name",
  },
  {
    accessorKey: "created_at",
    header: "Created At",
  },
  {
    id: "actions",
    cell: ({ row }) => <DataTableRowActions row={row} />,
  },
]
