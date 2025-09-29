import { SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { Link } from "@inertiajs/react";
import { getNavForRole } from '@/constants/navs';
import type { NavItem } from "@/types";
import { useState } from 'react';
import { ChevronDown } from 'lucide-react';

export default function NavMain({ userRole }: { userRole: string }) {

  const items = getNavForRole(userRole);

  const [openIndex, setOpenIndex] = useState<number | null>(null);

  const toggleDropdown = (index: number) => {
    setOpenIndex(openIndex === index ? null : index);
  };

  return (
    <SidebarMenu>
      {items.map((item, index) => (
        <SidebarMenuItem key={index}>
          {item.subtitle && (
            <div className="text-xs px-2 py-1 text-neutral-500 uppercase">{item.subtitle}</div>
          )}
          <SidebarMenuButton
            asChild={!item.children}
            onClick={() => item.children && toggleDropdown(index)}
            className="text-neutral-600 h-11 hover:text-neutral-800 dark:text-neutral-300 dark:hover:text-neutral-100"
          >
            {item.href && !item.children ? (
              <Link href={item.href} className="flex items-center gap-2">
                {item.icon && <item.icon size={16} />}
                {item.title}
              </Link>
            ) : (
              <div className="flex items-center w-full justify-between gap-2 cursor-pointer">
                <div className="flex items-center gap-2">
                  {item.icon && <item.icon size={16} />}
                  {item.title}
                </div>
                {item.children && <ChevronDown size={14} className={`${openIndex === index ? 'rotate-180' : ''}`} />}
              </div>
            )}
          </SidebarMenuButton>

          {item.children && openIndex === index && (
            <div className="ml-8 mt-1 space-y-2">
              {item.children.map((child, i) => (
                <Link
                  key={i}
                  href={child.href || '#'}
                  className="block text-sm text-gray-600 hover:text-black"
                >
                  {child.title}
                </Link>
              ))}
            </div>
          )}
        </SidebarMenuItem>
      ))}
    </SidebarMenu>
  );
}
