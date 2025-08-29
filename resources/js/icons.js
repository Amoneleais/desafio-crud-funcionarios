// resources/js/icons.js
import {
  User,
  Users,
  Plus,
  Edit,
  Trash2,
  Eye,
  Search,
  ChevronLeft,
  ChevronRight,
  ArrowLeftToLine,
  Home,
  Settings,
  LogOut,
  Check,
  X,
  AlertCircle,
  Info,
  CheckCircle,
  XCircle,
  Menu,
  UserPlus,
  FileText,
  Calendar,
  Phone,
  Mail,
  MapPin,
} from 'lucide-react';

// Export commonly used icons
export {
  User,
  Users,
  Plus,
  Edit,
  Trash2,
  Eye,
  Search,
  ChevronLeft,
  ChevronRight,
  ArrowLeftToLine,
  Home,
  Settings,
  LogOut,
  Check,
  X,
  AlertCircle,
  Info,
  CheckCircle,
  XCircle,
  Menu,
  UserPlus,
  FileText,
  Calendar,
  Phone,
  Mail,
  MapPin,
};

// Helper function to create icon HTML
export function createIcon(iconComponent, props = {}) {
  const { size = 24, class: className = '', ...otherProps } = props;
  return iconComponent({
    size,
    className,
    ...otherProps,
  });
}
